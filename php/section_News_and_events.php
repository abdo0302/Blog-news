<?php
$selects = $conn->query("SELECT * FROM Articles WHERE categorie_id=6");
$results = $selects->fetchAll(PDO::FETCH_ASSOC);
if (count($results) > 0) {
    $id_Article_News_events='';
    $titre_Article_News_events='';
    $contenu_Article_News_events='';
    $image_Article_News_events='';
    $date_creation_Article_News_events='';
   // $auteur_id_Article_News_events='';
    $categorie_id_Article_News_events='';
    $nomber_Article_News_events='';
    $auteur_id_events = '';
    $name_auteur_events = '';
    $contenu_events = '';
    foreach ($results as $row) {
        $nomber_comant_events = 0;
        echo '<script type="text/javascript">';
        echo 'var cc = document.createElement("div");';
        echo 'var t=[];';
        echo 'var x="";';
        echo '</script>';
        foreach($row as $a => $b){
            if($a == 'id'){
                $id_Article_News_events=$b;
                $select = $conn->query("SELECT * FROM articlelikes WHERE ArticleID =$id_Article_News_events");
                $result = $select->fetchAll(PDO::FETCH_ASSOC);
                $nomber_Article_News_events=count($result);

                $selec = $conn->query("SELECT * FROM Commentaires WHERE article_id = $id_Article_News_events");
                $resulta = $selec->fetchAll(PDO::FETCH_ASSOC);
                if (count($resulta) > 0) {
                    
                    foreach ($resulta as $r) {
                        $nomber_comant_events++;
                        
                        foreach($r as $u => $n) {
                            if($u == 'auteur_id') { 
                                $auteur_id_events = $n;
                                $selec = $conn->query("SELECT nom FROM utilisateurs WHERE id = $auteur_id_events");
                                $resulta = $selec->fetchAll(PDO::FETCH_ASSOC);
                                if (count($resulta) > 0) {
                                    foreach ($resulta as $r) {
                                        $name_auteur_events = $r['nom'];
                                    }
                                }
                            }
                            if($u == 'contenu') {
                                $contenu_events = $n;
                                 
                            }   
                            
                        }  
                          echo '<script type="text/javascript">';
                            echo 'cc.innerHTML+="<h4>' .$name_auteur_events . ' ::  <span style=\"color: #181818;\">' . $contenu_events. '</span></h4>";';
                            echo 'x+="<h4>' . $name_auteur. ' ::  <span style=\"color: #181818;\">' .$contenu.'</span></h4>";';
                            echo '</script>';
                    }
                            
                }
                
            }if($a == 'titre'){
                $titre_Article_News_events=$b;
            }elseif($a == 'contenu'){
                $contenu_Article_News_events=$b;
            }elseif($a == 'image'){
                $image_Article_News_events=$b;
            }elseif($a == 'date_creation'){
                $date_creation_Article_News_events=$b;
            }elseif($a == 'categorie_id'){
                $categorie_id_Article_News_events=$b;
            }
        }
            echo '<script type="text/javascript">';
            echo 'cc.classList = "comants";';
            echo 'var card = document.createElement("div");';
            echo 'card.classList = "card article";';
            echo 'var img = document.createElement("img");';
            echo 'img.classList = "image";';
            echo 'img.src = "img/'.$image_Article_News_events.'";';
            echo 'var div = document.createElement("div");';
            echo 'var span = document.createElement("span");';
            echo 'span.classList = "dats";';
            echo 'var contenu = document.createElement("p");';
            echo 'contenu.classList = "conten";';
            echo 'contenu.textContent="'.$contenu_Article_News_events.'";';
            echo 'card.appendChild(contenu);';
            echo 'var email = document.createElement("span");';
            echo 'email.classList = "email tetle_articls";';
            echo 'email.textContent="'.$titre_Article_News_events.'";';
            echo 'span.textContent="'.$date_creation_Article_News_events.'";';
            echo 'cc.innerHTML=x;';
            echo 'var contenar_comant_lik = document.createElement("div");';
            echo 'var like = document.createElement("a");';
            echo 'like.classList = "like";';
            echo 'like.id = "'.$id_Article_News_events.'";';
            echo 'var comant = document.createElement("a");';
            echo 'var i1 = document.createElement("i");';
            echo 'var i2 = document.createElement("i");';
            echo 'var span1 = document.createElement("span");';
            echo 'var span2 = document.createElement("span");';
            echo 'span1.textContent="'.$nomber_Article_News_events.'";';
            echo 'span2.textContent="'.$nomber_comant_events.'";';
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
            echo 'card.appendChild(cc);';
            echo 'var card_News_and_events = document.querySelector(".card_News_and_events");';
            echo 'card_News_and_events.appendChild(card);';
            echo '</script>';
            if(isset($_SESSION['nom'])){
              $selects = $conn->query('SELECT * FROM articlelikes WHERE ArticleID='.$id_Article_News_events.' AND UserID='.$_SESSION["id"].'');
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