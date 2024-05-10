<?php
if(isset($_POST['submint_sign_in'])){
    $email_sign_in= $_POST['emile_sign_in'];
    $password_sign_in= $_POST['Password_sign_in'];

    $selects=$conn->query("SELECT * FROM utilisateurs WHERE email='$email_sign_in' AND mot_de_passe='$password_sign_in'");
    $results=$selects->fetchAll(PDO::FETCH_ASSOC);
    if(count($results) > 0) {
                $id_utilisateur= '';
                $nom_utilisateur= '';
                $email_utilisateur= '';
                $mot_de_passe_utilisateur= '';
                $est_admin_utilisateur= '';
                $image_utilisateur= '';
        foreach($results as $result){
            foreach($result as $a=>$b){
                  if($a=='id'){
                     $id_utilisateur=$b;
                  }elseif($a=='nom'){
                    $nom_utilisateur=$b;
                  }elseif($a=='email'){
                    $email_utilisateur=$b;
                  }elseif($a=='mot_de_passe'){
                    $mot_de_passe_utilisateur=$b;
                  }elseif($a=='est_admin'){
                    $est_admin_utilisateur=$b;
                  }elseif($a=='image'){
                    $image_utilisateur=$b;
                  }
            }
        }
        echo '<script type="text/javascript">';
        echo 'var id_utilisateur = ' . json_encode($id_utilisateur) . ';';
        echo 'var nom_utilisateur = ' . json_encode($nom_utilisateur) . ';';
        echo 'var email_utilisateur = ' . json_encode($email_utilisateur) . ';';
        echo 'var mot_de_passe_utilisateur = ' . json_encode($mot_de_passe_utilisateur) . ';';
        echo 'var image_utilisateur = ' . json_encode($image_utilisateur) . ';';
        echo 'alert("ID: " + id_utilisateur + "\n nom de utilisateur: " + nom_utilisateur + "\n email de utilisateur: " + email_utilisateur + "\n mot de passe : " + mot_de_passe_utilisateur + "\n image_utilisateur : " + image_utilisateur);';
        echo '</script>';
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("invalide");'; 
      echo '</script>';
    }
}

?>
