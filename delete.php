<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `client` where id=$id";
        $conn->query($sql);
    }
    header('location:/php-leg/index.php');
    exit;
?>