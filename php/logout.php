<?php
    session_start();

    if(isset($_SESSION['unique_id'])) { //si le chateur est connecté sur son compte alors aller sur cette page
        include_once("config.php");
        $logout_id = mysqli_real_escape_string($connect, $_GET['logout_id']);

        if(isset($logout_id)) { //si l'id de déconnexion est envoyé
            $status = "Déconnecté";
            //une fois le chater déconnecté, nous actualisons son statut à "Déconnecté"
            //et après reconnecion, nous actualisons ancore son statut à "Actif"
            $sql = mysqli_query($connect, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$logout_id}';");
            if($sql) {
                session_unset();
                session_destroy();
                header("location:../login.php");
            }
        }
        else {
            header("location:../users.php");
        }
    }
    else {
        header("location:../login.php");
    }
?>