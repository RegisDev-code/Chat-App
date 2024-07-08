<?php
    $connect = mysqli_connect("localhost", "root", "", "chat");

    if(!$connect) {
        echo "Connexion réussie !" . mysqli_connect_error();
    }
?>