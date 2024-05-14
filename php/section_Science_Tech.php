<?php
$selects = $conn->query("SELECT * FROM Articles WHERE categorie_id=2");
$results = $selects->fetchAll(PDO::FETCH_ASSOC);
if (count($results) > 0) {
    $id_Article_science='';
    $titre_Article_science='';
    $contenu_Article_science='';
    $image_Article_science='';
    $date_creation_Article_science='';
   // $auteur_id_Article_science='';
    $categorie_id_Article_science='';
    $nomber_like='';
    foreach ($results as $row) {
        foreach($row as $a => $b){
            if($a == 'id'){
                $id_Article_science=$b;
                $select = $conn->query("SELECT * FROM articlelikes WHERE ArticleID =$id_Article_science");
                $result = $select->fetchAll(PDO::FETCH_ASSOC);
                $nomber_like=count($result);
            }if($a == 'titre'){
                $titre_Article_science=$b;
            }elseif($a == 'contenu'){
                $contenu_Article_science=$b;
            }elseif($a == 'image'){
                $image_Article_science=$b;
            }elseif($a == 'date_creation'){
                $date_creation_Article_science=$b;
            }elseif($a == 'categorie_id'){
                $categorie_id_Article_science=$b;
            }
        }
            echo '<script type="text/javascript">';
            echo 'var card = document.createElement("div");';
            echo 'card.classList = "card";';
            echo 'var img = document.createElement("img");';
            echo 'img.src = "img/'.$image_Article_science.'";';
            echo 'var div = document.createElement("div");';
            echo 'var span = document.createElement("span");';
            echo 'var email = document.createElement("span");';
            echo 'email.classList = "email";';
            echo 'email.textContent="'.$titre_Article_science.'";';
            echo 'span.textContent="'.$date_creation_Article_science.'";';
            echo 'var contenar_comant_lik = document.createElement("div");';
            echo 'var like = document.createElement("a");';
            echo 'like.classList = "like";';
            echo 'like.id = "'.$id_Article_science.'";';
            echo 'var comant = document.createElement("a");';
            echo 'var i1 = document.createElement("i");';
            echo 'var i2 = document.createElement("i");';
            echo 'var span1 = document.createElement("span");';
            echo 'var span2 = document.createElement("span");';
            echo 'span1.textContent="'.$nomber_like.'";';
            echo 'span2.textContent="100";';
            echo 'i1.classList = "fa-solid fa-heart";';
            echo 'i2.classList = "fa-solid fa-comment";';
            echo 'contenar_comant_lik.classList = "contenar_comant_lik";';
            echo 'div.appendChild(span);';
            echo 'div.classList = "div1";'; 
            echo 'comant.appendChild(span2);';
            echo 'like.appendChild(span1);';
            echo 'like.appendChild(i1);';
            echo 'comant.appendChild(i2);';
            echo 'contenar_comant_lik.appendChild(comant);';
            echo 'contenar_comant_lik.appendChild(like);';
            echo 'card.appendChild(img);';
            echo 'card.appendChild(div);';
            echo 'card.appendChild(email);';
            echo 'card.appendChild(contenar_comant_lik);';
            echo 'var card_Science_Tech = document.querySelector(".card_Science_Tech");';
            echo 'card_Science_Tech.appendChild(card);';
            echo '</script>';
            if(isset($_SESSION['nom'])){
               $selects = $conn->query('SELECT * FROM articlelikes WHERE ArticleID='.$id_Article_science.' AND UserID='.$_SESSION["id"].'');
            $results = $selects->fetchAll(PDO::FETCH_ASSOC);
            if (count($results) !== 0) {
                echo '<script type="text/javascript">';
                echo 'i1.style.color="red"';
                echo '</script>';
            } 
            }
            
    }
}
?>