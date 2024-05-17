<?php
    
$selects = $conn->query("SELECT * FROM Articles WHERE categorie_id=3");
$results = $selects->fetchAll(PDO::FETCH_ASSOC);
if (count($results) > 0) {
    $id_Article_business = '';
    $titre_Article_business = '';
    $contenu_Article_business = '';
    $image_Article_business = '';
    $date_creation_Article_business = '';
    $categorie_id_Article_business = '';
    $nomber_Article_business = '';
    $nomber_comant = 0;
    $auteur_id = '';
    $name_auteur = '';
    $contenu = '';

    foreach ($results as $row) {
        $nomber_comant = 0;
        echo '<script type="text/javascript">';
        echo 'var cc = document.createElement("div");';
        echo 'var x="";';
        echo '</script>';
        foreach($row as $a => $b) {
            if($a == 'id') {
                $id_Article_business = $b;
                $select = $conn->query("SELECT * FROM articlelikes WHERE ArticleID = $id_Article_business");
                $result = $select->fetchAll(PDO::FETCH_ASSOC);
                $nomber_Article_business = count($result);

                $selec = $conn->query("SELECT * FROM Commentaires WHERE article_id = $id_Article_business");
                $resulta = $selec->fetchAll(PDO::FETCH_ASSOC);
                if (count($resulta) > 0) {
                    
                    foreach ($resulta as $r) {
                        $nomber_comant++;
                        
                        foreach($r as $u => $n) {
                            if($u == 'auteur_id') { 
                                $auteur_id = $n;
                                $selec = $conn->query("SELECT nom FROM utilisateurs WHERE id = $auteur_id");
                                $resulta = $selec->fetchAll(PDO::FETCH_ASSOC);
                                if (count($resulta) > 0) {
                                    foreach ($resulta as $r) {
                                        $name_auteur = $r['nom'];
                                    }
                                }
                            }
                            if($u == 'contenu') {
                                $contenu = $n;
                                 
                            }   
                            
                        }  
                          echo '<script type="text/javascript">';
                           // echo 'cc.innerHTML+="<h4>' . $name_auteur. ' ::  <span style=\"color: #181818;\">' .$contenu.'</span></h4>";';
                            echo 'x+="<h4>' . $name_auteur. ' ::  <span style=\"color: #181818;\">' .$contenu.'</span></h4>";';
                            echo '</script>';
                    }
                            
                }  
                           
            }if($a == 'titre'){
                $titre_Article_business=$b;
            }elseif($a == 'contenu'){
                $contenu_Article_business=$b;
            }elseif($a == 'image'){
                $image_Article_business=$b;
            }elseif($a == 'date_creation'){
                $date_creation_Article_business=$b;
            }elseif($a == 'categorie_id'){
                $categorie_id_Article_business=$b;
            }
        }
            echo '<script type="text/javascript">';
            echo 'cc.classList = "comants";';
            echo 'var card = document.createElement("div");';
            echo 'var id_de_article=document.createElement("span");';
            echo 'id_de_article.classList = "id_de_article idd";';
            echo 'id_de_article.textContent="'.$id_Article_business.'";';
            echo 'card.classList = "card article";';
            echo 'var img = document.createElement("img");';
            echo 'img.classList = "image image_articles";';
            echo 'img.src = "img/'.$image_Article_business.'";';
            echo 'var div = document.createElement("div");';
            echo 'var span = document.createElement("span");';
            echo 'var contenu = document.createElement("p");';
            echo 'contenu.classList = "conten";';
            echo 'contenu.textContent="'.$contenu_Article_business.'";';
            echo 'card.appendChild(contenu);';
            echo 'span.classList = "dats";';
            echo 'var email = document.createElement("span");';
            echo 'email.classList = "email tetle_articls";';
            echo 'email.textContent="'.$titre_Article_business.'";';
            echo 'span.textContent="'.$date_creation_Article_business.'";';
            echo 'cc.innerHTML=x;';
            echo 'var contenar_comant_lik = document.createElement("div");';
            echo 'var like = document.createElement("a");';
            echo 'like.classList = "like";';
            echo 'like.id = "'.$id_Article_business.'";';
            echo 'var comant = document.createElement("a");';
            echo 'var i1 = document.createElement("i");';
            echo 'var i2 = document.createElement("i");';
            echo 'var span1 = document.createElement("span");';
            echo 'var span2 = document.createElement("span");';
            echo 'span1.textContent="'.$nomber_Article_business.'";';
            echo 'span2.textContent="'.$nomber_comant.'";';
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
            echo 'card.appendChild(id_de_article);';
            echo 'card.appendChild(email);';
            echo 'card.appendChild(contenar_comant_lik);';
            echo 'card.appendChild(cc);';
            echo 'var card_Business = document.querySelector(".card_Business");';
            echo 'card_Business.appendChild(card);';
            echo '</script>';
            if(isset($_SESSION['nom'])){
                $selects = $conn->query('SELECT * FROM articlelikes WHERE ArticleID='.$id_Article_business.' AND UserID='.$_SESSION["id"].'');
            $results = $selects->fetchAll(PDO::FETCH_ASSOC);
            if (count($results) !== 0) {
                echo '<script type="text/javascript">';
                echo 'like.style.color="red"';
                echo '</script>';
            }
            }
            
    }
} echo '<script type="text/javascript">';
                            echo 'console.log([...new Set(t)]);';
                            echo '</script>';
?>