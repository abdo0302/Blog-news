<?php
   class utilisateur{
        private $nom;
        private $email;
        private $mot_de_passe;
        private $role;
        private $image;
        public function __construct($nom,$email,$mot_de_passe,$role,$image){
           $this->nom=$nom;
           $this->email=$email;
           $this->mot_de_passe=$mot_de_passe;
           $this->role=$role;
           $this->image=$image;

        }
        public function sign_in() {
         if($this->role==true){
            echo '<script type="text/javascript">';
            echo 'window.location.href = "admin.php";';
            echo '</script>';
         }
      echo '<script type="text/javascript">';
       echo 'var signs = document.querySelectorAll(".sign");';
       echo 'var names = document.querySelectorAll(".name");';
       echo 'var images = document.querySelectorAll(".images");';
      echo 'var inf_utilisateur = document.querySelector(".info_utilisateur");';
      echo 'inf_utilisateur.style.display="flex";'; 
       echo 'signs.forEach(function(sign) { sign.style.display="none"; });';
      echo 'names.forEach(function(name) { name.textContent="'. $this->nom .'"; });'; 
      echo 'images.forEach(function(image) { image.src="'.'img/'. $this->image .'"; });'; 
      echo '</script>';
      }

      public function edit_info(){
         echo '<script type="text/javascript">';
         echo 'let image = document.querySelectorAll(".image");';
         echo 'image.foreach(function(image){ image.src="'.'img/'. $this->image .'"; })';
         
         echo '</script>';


      }
   }




?>