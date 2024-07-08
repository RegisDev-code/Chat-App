<?php
    session_start();
    include_once("config.php");
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($connect, $_POST['searchTerm']);
    $output = "";

    $sql = mysqli_query($connect, "SELECT * FROM users WHERE first_name LIKE '%{$searchTerm}%' OR last_name LIKE '%{$searchTerm}%'");

    if(mysqli_num_rows($sql) > 0) {
        include("data.php");
    }
    else {
        $output .= "Aucun utilisateur correspondant !";
    }

    echo $output;
?>

<!-- NOT unique_id='{$outgoing_id}' AND ( -->