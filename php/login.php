<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    if(!empty($email) && !empty($password)) {
        // Vérifions que l'utilisateur a entré un email et un mot de passe conformes à ceux d'une ligne de la base de données
        $sql = mysqli_query($connect, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}';");
        if(mysqli_num_rows($sql) > 0) { //si les informations sont correctes
            $row = mysqli_fetch_assoc($sql);
            $status = "Actif";
            //Mettre le statut du chater à "Actif" si la connexion a été un succès
            $sql2 = mysqli_query($connect, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$row['unique_id']}';");
            if($sql2) {
                $_SESSION['unique_id'] = $row['unique_id']; //avec cette session , nous pouvons utiliser le unique_id dans un autre fichier php
                echo "Opération réussie !";
            }
        }
        else {
            echo "L'email ou le mot de passe est incorrect !";
        }
    }
    else {
        echo "Tous les champs sont requis !";
    }
?>