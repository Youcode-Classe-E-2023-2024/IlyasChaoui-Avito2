<?php

require_once '../config.php';

mysqli_select_db($connection, 'avito2');

if (isset($_GET["Id"])) {
    $id = $_GET["Id"];

    $sql = "DELETE FROM Annonce WHERE id = ?";
    $stmt = $connection->prepare($sql);

    $stmt->bind_param("i", $id);

    $res = $stmt->execute();

    if ($res) {
        // Redirect to index.php with a query parameter for SweetAlert
        header("location:../../pages/MesAnnonces.php?task_status=deleted");
        exit();
    } 
} else {
    echo "Error in deleting task.";
}

?>


