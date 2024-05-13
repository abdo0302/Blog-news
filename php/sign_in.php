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
          $_SESSION['nom']=$nom_utilisateur;
          $_SESSION['email']=$email_utilisateur;
          $_SESSION['mot_de_passe']=$mot_de_passe_utilisateur;
          $_SESSION['est_admin']=$est_admin_utilisateur;
         $_SESSION['image']=$image_utilisateur;
        include "./php/src/utilisateur.class.php";
       $utilisateur1=new utilisateur($_SESSION['nom'],$_SESSION['email'],$_SESSION['mot_de_passe'],$_SESSION['est_admin'],$_SESSION['image']);
       $utilisateur1->sign_in();
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("invalide");'; 
      echo '</script>';
    }
}

?>
