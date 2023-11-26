<?php
session_start();
include_once '../includes/checkLogin.php';
include_once '../includes/config.php';

$warningScript = '';

mysqli_select_db($connection, 'avito2');

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $sql  = "SELECT * FROM Annonce WHERE Id = $id ;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
?>





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php echo $warningScript; ?>
        <title>Créer votre annonce</title>
    </head>
    <style>
        /* @import url("https://fonts.googleapis.com/css?family=Lobster&display=swap") repeat scroll 0 0 rgba(0, 0, 0, 0); */

        body {
            background: #fff;
        }

        .title {
            font-size: 2.5rem;
            font-family: "Lobster", cursive;
        }

        .wrapper {
            animation: scroll 100s linear infinite;
            background: url("../pictures/white-painted-wall-texture-background.jpg"),
                #111111;
            color: #eee;
            height: 150vh;
            min-width: 360px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 1000px;
            perspective-origin: 50% 50%;
        }

        @keyframes scroll {
            100% {
                background-position: 0px -400%;
            }
        }

        /* Fallback if the operatring system prefers reduced motion*/
        @media (prefers-reduced-motion) {
            .wrapper {
                animation: scroll 800s linear infinite;
            }
        }

        @media (min-width: 670px) {
            .title {
                font-size: 5rem;
            }
        }
    </style>

    <body>

        <!-------------------------------------Start Navbar  ------------------------------------>

        <!-- <div class="h-screen w-full z-20 fixed flex overflow-hidden"> -->
        <div class="w-full z-20 fixed flex flex-col justify-between">
            <!-- Header -->
            <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
                <!-- Informação -->
                <div class="flex flex-shrink-0 items-center space-x-4 text-white">
                    <div class="mx-96 flex z-50 ">
                        <a href="./MesAnnonces.php">
                            <div class="b relative mx-10 h-10 w-36 flex justify-center items-center ">
                                <div class="i h-10 w-36 bg-red-500 items-center rounded-xl shadow-2xl cursor-pointer absolute overflow-hidden transform hover:scale-x-110 hover:scale-y-105 transition duration-300 ease-out">
                                </div>
                                <span class="text-center text-white font-semibold z-10 pointer-events-none">Mes
                                    annonces!</span>
                                <span class="absolute flex h-6 w-6 mx-32 top-0 right-0 transform -translate-y-2.5">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                    <span class="absolute inline-flex rounded-full h-6 w-6 bg-red-500"></span>
                                </span>
                            </div>
                        </a>
                        <a href="./CreateAnnonce.php">
                            <div class="b relative  h-10 w-36 flex justify-center items-center ">
                                <div class="i h-10 w-36 bg-blue-500 items-center rounded-xl shadow-2xl cursor-pointer absolute overflow-hidden transform hover:scale-x-110 hover:scale-y-105 transition duration-300 ease-out">
                                </div>
                                <span class="text-center text-white font-semibold z-10 pointer-events-none">Create
                                    annonce!</span>
                                <span class="absolute flex h-6 w-6 top-0 right-0 transform translate-x-2.5 -translate-y-2.5">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                    <span class="absolute inline-flex rounded-full h-6 w-6 bg-blue-500"></span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <!-- Texto -->
                    <div class="flex flex-col items-end ">
                        <!-- Nome -->
                        <div class="text-md font-medium ">
                            <?php echo $_SESSION['username']; ?>
                        </div>
                        <!-- Título -->
                        <div class="text-sm font-regular">
                            <?php echo $_SESSION['role']; ?>
                        </div>
                    </div>

                    <!-- Foto -->
                    <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div>

                </div>
            </header>

            <!-- Main -->

        </div>
        <!-- Sidebar -->
        <aside class="h-screen z-20 fixed w-16 flex flex-col space-y-10 items-center justify-center  bg-gray-800 text-white">
            <!-- Profile -->
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </div>

            <!-- Courses -->
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>

            <!-- Theme -->
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </div>

            <!-- Configuration -->
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div class="">
                <a href="../includes/logout.php" class=" mx-3 hover:text-red-100  px-2 py-2 text-white cursor-pointer "><i class="fa-solid fa-right-from-bracket text-white hover:text-red-800"></i></a>
            </div>
        </aside>



        <!-------------------------------------End Navbar  ------------------------------------>




        <!-------------------------------------start container  ------------------------------------>

        <article class="wrapper">
            <h2 class="title"></h2>
            <div class="flex my-32 bg-gray-800 justify-center backdrop-blur-2xl border-4 rounded-3xl" style=" height: 125vh;width: 30vw; ">
                <div class="">
                    <div class="flex min-h-full flex-col justify-center items-center px-6 py-12 lg:px-8">
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <img class="mx-32 w-32" src="pictures/logo.png" alt="">
                            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-black">Créer votre
                                annonce</h2>
                        </div>

                        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form class="space-y-6" action="../includes/Annonce_crud/Update.php" method="POST" enctype="multipart/form-data">
                                <div class="flex flex-col">
                                    <div class="w-96 h-28 border-4 rounded-2xl flex flex-col justify-center">
                                        <div class="flex flex-col justify-center items-center">
                                            <img src="pictures/add.png" alt="add image" width="70" height="70" class="cursor-pointer" id="add">
                                            <img src="pictures/done.png" alt="image added" width="70" height="70" class="cursor-pointer hidden" id="done">
                                            <input type="file" name="image" id="image" value="<?php echo $row['Image']; ?>" class="border-4 bg-black absolute w-32 mx-12 opacity-0">
                                            <p class="font-bold text-white">Cliquer pour importer une image</p>
                                        </div>
                                    </div>
                                    <input type="text" name="username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" required class="p-5 placeholder-white font-bold bg-transparent border-4 border-white my-3 w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                                    <input type="text" name="title" placeholder="Title" value="<?php echo $row['Title']; ?>" required class="p-5 placeholder-white font-bold bg-transparent border-4 border-white my-3 w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <input type="number" min=0 name="price" placeholder="Price"value="<?php echo $row['Price']; ?>" required class="p-5 bg-transparent placeholder-white font-bold border-4 border-white my-3 block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <!-- <input type="number" name="Phone_number" placeholder="Phone number" value="<?php echo $_SESSION['PhoneNumber']; ?>" required class="p-5 bg-transparent placeholder-white font-bold border-4 border-white my-3 block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly> -->
                                    <input type="text" name="description" placeholder="Description"value="<?php echo $row['Description']; ?>" required class="p-5 bg-transparent placeholder-white font-bold border-4 border-white my-3 block w-full h-28 rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <input type="hidden" value="<?php echo $row['Id'] ?>" name="Id">
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit
                                        annonce</button>
                                </div>
                                <div class="flex justify-center text-blue-700 font-bold underline">
                                    <a href="index.php">Go back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <?php } else {
    echo "noting change";
} ?>

    <script>
        <?php
        if ($task_status === 'uploaded') {
        ?>
            swal({
                title: "Update!",
                text: "Your annonce file has been uploaded!",
                icon: "success",
            });
        <?php
        }

        ?>
    </script>

    <?php echo $warningScript; ?>


    </body>

    </html>