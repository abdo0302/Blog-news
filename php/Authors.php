<?php

$selects = $conn->query("SELECT * FROM utilisateurs WHERE est_admin=1");
    $results = $selects->fetchAll(PDO::FETCH_ASSOC);
    if (count($results) > 0) {
        $image_authors='';
        $nom_authors='';
        $email_authors='';
        foreach ($results as $row) {
            foreach($row as $a => $b){
                if($a == 'image'){
                    $image_authors=$b;
                }elseif($a == 'nom'){
                    $nom_authors=$b;
                }elseif($a == 'email'){
                    $email_authors=$b;
                }
            }
                echo '<script type="text/javascript">';
                echo 'var card = document.createElement("div");';
                echo 'card.classList = "card";';
                echo 'var img = document.createElement("img");';
                echo 'img.src = "img/'.$image_authors.'";';
                echo 'var div = document.createElement("div");';
                echo 'var span = document.createElement("span");';
                echo 'var email = document.createElement("span");';
                echo 'email.classList = "email";';
                echo 'email.textContent="'.$email_authors.'";';
                echo 'span.textContent="'.$nom_authors.'";';
                echo 'div.appendChild(span);';
                echo 'div.classList = "div1";'; 
                echo 'card.appendChild(img);';
                echo 'card.appendChild(div);';
                echo 'card.appendChild(email);';
                echo 'var authors = document.querySelector(".authors");';
                echo 'authors.appendChild(card);';
                echo '</script>';
        }
    }
?>