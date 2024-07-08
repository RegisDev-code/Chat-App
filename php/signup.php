<?php
    // session_start();
    // include_once "config.php";
    // $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    // $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    // $email = mysqli_real_escape_string($connect, $_POST['email']);
    // $password = mysqli_real_escape_string($connect, $_POST['password']);

    // if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

    //     //vérificaiton de la validité ou non de l'email
    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //si l'email est valide
    //         //vérificaiton de l'existance de l'email ou non dans la base de données
    //         $sql = mysqli_query($connect, "SELECT email FROM users WHERE email = '{$email}';");

    //         if(mysqli_num_rows($sql) > 0) { //si l'email existe déjà
    //             echo "$email - Cet email existe déjà !";
    //         }
    //         else {
    //             //vérification du chargement du fichier ou non par l'utilisateur
    //             if(isset($_FILES['image'])) { //si le fichier a été chargé
    //                 $img_name = $_FILES['image']['name']; //récupération du nom du fichier de l'utilisateur
    //                 $tmp_name = $_FILES['image']['tmp_name']; //ce nom temporel est utilisé pour sauvegarder/déplacer le fichier dans notre dossier

    //                 //explosons l'image pour récupérer la dernière ectension comme jpg ou png
    //                 $img_explode = explode('.', $img_name);
    //                 $img_ext = end($img_explode); //nous venons de récupérer l'extension du fichier chargé par l'utilisateur

    //                 $extensions = ['png','PNG','jpeg','JPEG','jpg','JPG']; //voici la liste des extensions valides que nous stockons dans un tableau

    //                 if(in_array($img_ext, $extensions) === true) { //si l'extension du fichier de l'utilisateur correspond à l'une des estensions dans le tableau
    //                     $time = time(); //Ceci nous retournera l'heure courante
    //                                     //nous avons besoin de ce temps parce que lorsque vous mettez une image à jour dans notre dossier, nous renommons le fichier de l'utilisateur avec l'heure courante
    //                                     //alors tous les fichiers auront un nom unique
    //                     //déplaçons du fichier de l'utilisateur dans notre dossier particulier
    //                     $new_img_name = $time.$img_name;

    //                     if(move_uploaded_file($tmp_name, "images/".$new_img_name)) { //si le déplacement du fichier de l'utilisateur mis à jour dans notre dossier est un succès
    //                         $status = "Actif"; //Une fois que l'utilisateur se connecte, aloes son statut sera actif
    //                         $random_id = rand(time(), 10000000); //création d'un id aléatoire pour les utilisateurs

    //                         //inérins toutes toutes les données de l'utilisateur dans une table
    //                         $sql2 = mysqli_query($connect, "INSERT INTO users (unique_id, first_name, last_name, email, password, img, status)
    //                                              VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}');");

    //                         if($sql2) { //si les données ont été insérées
    //                             $sql3 = mysqli_query($connect, "SELECT * FROM users WHERE email = '{$email}';");

    //                             if(mysqli_num_rows($sql3) > 0) {
    //                                 $row = mysqli_fetch_assoc($sql3);
    //                                 $_SESSION['unique_id'] = $row['unique_id']; //avec cette session , nous pouvons utiliser le unique_id dans un autre fichier php
    //                                 echo "Opération réussie !";
    //                             }
    //                         }
    //                         else {
    //                             echo "Un problème est survenu !";
    //                         }
    //                     }
    //                 }
    //                 else {
    //                     echo "Veuillez choisir un fichier .jpg, .png ou .jpeg !";
    //                 }
    //             }
    //             else {
    //                 echo "Veuillez choisir une image - .jpg, .png ou .jpeg";
    //             }
    //         }
    //     }
    //     else {
    //         echo "'$email' n'est pas un email valide !";
    //     }
    // }
    // else {
    //     echo "Tous les champs sont requis !";
    // }
?>



<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

        //vérificaiton de la validité ou non de l'email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //si l'email est valide
            //vérificaiton de l'existance de l'email ou non dans la base de données
            $sql = mysqli_query($connect, "SELECT email FROM users WHERE email = '{$email}';");

            if(mysqli_num_rows($sql) > 0) { //si l'email existe déjà
                echo "$email - Cet email existe déjà !";
            }
            else {
                //vérification du chargement du fichier ou non par l'utilisateur
                if(!empty($_FILES['image']['size'])) { //si le fichier a été chargé

                    if(!is_dir("images")) {
                        mkdir("images");
                    }

                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                    if(in_array($extension, ['jpg','JPG','png','PNG','jpeg','JPEG'])) { 
                        $new_name = time()."_".$_FILES['image']['name'];
                        $path = "images/".time()."_".$_FILES['image']['name'];
                        $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

                        if($upload) { //si le déplacement du fichier de l'utilisateur mis à jour dans notre dossier est un succès
                            $status = "Actif"; //Une fois que l'utilisateur se connecte, aloes son statut sera actif
                            $random_id = rand(time(), 10000000); //création d'un id aléatoire pour les utilisateurs

                            //inérins toutes toutes les données de l'utilisateur dans une table
                            $sql2 = mysqli_query($connect, "INSERT INTO users (unique_id, first_name, last_name, email, password, img, img_route, status)
                                                 VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_name}', '{$path}', '{$status}');");

                            if($sql2) { //si les données ont été insérées
                                $sql3 = mysqli_query($connect, "SELECT * FROM users WHERE email = '{$email}';");

                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; //avec cette session , nous pouvons utiliser le unique_id dans un autre fichier php
                                    echo "Opération réussie !";
                                }
                            }
                            else {
                                echo "Un problème est survenu !";
                            }
                        }
                    }
                    else {
                        echo "Veuillez choisir un fichier .jpg, .png ou .jpeg !";
                    }
                }
                else {
                    echo "Veuillez choisir une image - .jpg, .png ou .jpeg";
                }
            }
        }
        else {
            echo "'$email' n'est pas un email valide !";
        }
    }
    else {
        echo "Tous les champs sont requis !";
    }
?>