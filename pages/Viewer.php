<?php
session_start();
include_once '../includes/checkLogin.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Viewer.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>



    <!-- <div class="h-screen w-full z-20 fixed flex overflow-hidden"> -->
        <div class="w-full z-20 fixed flex flex-col justify-between">
            <!-- Header -->
            <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
                <!-- Informação -->
                <div class="flex flex-shrink-0 items-center space-x-4 text-white">

                    <!-- Texto -->
                    <div class="flex flex-col items-end ">
                        <!-- Nome -->
                        <div class="text-md font-medium "><?php echo $_SESSION['username']; ?></div>
                        <!-- Título -->
                        <div class="text-sm font-regular"><?php echo $_SESSION['role']; ?></div>
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
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <!-- Courses -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>

            <!-- Theme -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </div>

            <!-- Configuration -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div class="logout-btn">
                <a href="../includes/logout.php" class=" mx-3 hover:text-red-100  px-2 py-2 text-white cursor-pointer "><i
                        class="fa-solid fa-right-from-bracket " style="color: #ffffff;  " ></i></a>
            </div>
        </aside>



    

    </div>



    <div class="shell relative">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg"
                                alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Ethnic</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Introvert</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-XL_Ba-178Fo/WVSvm5AbApI/AAAAAAAAAK4/X5109HTqUiAhPjbmz4NFVHcpL7ZWe6T3ACPcBGAYYCw/s1600/wow-29.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Beauty</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Drama</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart cvf ggf gfg g</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg"
                                alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Ethnic</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Introvert</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-XL_Ba-178Fo/WVSvm5AbApI/AAAAAAAAAK4/X5109HTqUiAhPjbmz4NFVHcpL7ZWe6T3ACPcBGAYYCw/s1600/wow-29.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Beauty</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Drama</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart cvf ggf gfg g</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg"
                                alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Ethnic</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Introvert</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-XL_Ba-178Fo/WVSvm5AbApI/AAAAAAAAAK4/X5109HTqUiAhPjbmz4NFVHcpL7ZWe6T3ACPcBGAYYCw/s1600/wow-29.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Beauty</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Drama</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart cvf ggf gfg g</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg"
                                alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Ethnic</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Introvert</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://1.bp.blogspot.com/-XL_Ba-178Fo/WVSvm5AbApI/AAAAAAAAAK4/X5109HTqUiAhPjbmz4NFVHcpL7ZWe6T3ACPcBGAYYCw/s1600/wow-29.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Beauty</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img
                                src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg"
                                alt="Product" class="img-responsive" /></div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Drama</span>
                            </div>
                            <div class="title-product">
                                <h3>My face not my heart cvf ggf gfg g</h3>
                            </div>
                            <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5
                                    player. player good work now check this link</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                                <div class="wcf-right"><a href="#" class="buy-btn"><i
                                            class="zmdi zmdi-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>