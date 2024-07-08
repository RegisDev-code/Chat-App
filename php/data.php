<?php
    while($row = mysqli_fetch_assoc($sql)) {
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '{$row['unique_id']}'
                 OR outgoing_msg_id = '{$row['unique_id']}') AND (outgoing_msg_id = '{$outgoing_id}'
                 OR incoming_msg_id = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1;";
        $query2 = mysqli_query($connect, $sql2);
        $row2 = mysqli_fetch_assoc($query2);

        if(mysqli_num_rows($query2) > 0) {
            $result = $row2['msg'];
        }
        else {
            $result = "Démarrez la discussion !";
        }

        if(isset($row2)) {
            //Couper le message si les mots dépassent 28
            (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
            //ajouter le texte Vous: avant le message si le chateur envoie son message
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Vous: " : $you = "";
            //Dynamiser le statut du chater
            ($row['status'] == "Déconnecté") ? $offline = "offline" : $offline = "";

            $output .='<a href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                            <img src="php/'. $row['img_route'] .'" alt="">

                            <div class="details">
                                <span>'. $row['last_name'] ." ". $row['first_name'] .'</span>
                                <p>'. $you . $msg .'</p>
                            </div>
                        </div>

                        <div class="status-dot '.$offline.'"><i class="fa fa-circle"></i></div>
                    </a>';
        }
    }
?>