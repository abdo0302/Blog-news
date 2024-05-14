<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog news</title>
    <!--logo de page-->
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/utilisateur.css">

</head>
<body>
    <main >
        <!-- aside bar -->
        <aside >
            <div class ="logo">BLOG News</div>
            <div class ="photo_de_profl"><img src="./img/Screenshot 2024-05-09 080644.png" class="image" alt=""></div>
            <div class ="info">
                <span class ="nom">name</span>
                <span class ="emai">exmple.@gmail.com</span>
            </div>
            <div class ="button"> <button id="btn_home" type="submit"> <a href="index.php">Home</a></button> <button id="btn_Logout" type="submit">Logout</button></div>
    
        </aside>
        <section >
            <H3 >INFo User</H3>
            <!-- div info user -->
            <div class="info_user">
                <form action="utilisateur.php" method="POST">
                    <div class ="photo_de_profl"><img src="./img/Screenshot 2024-05-09 080644.png"  class="image" alt=""></div>
                    <div><input type="file"></div>
                    <div><span id="span1">name</span><input type="text" id ="name"></div>
                    <div><span id="span2">email</span><input type="text" id ="email"></div>
                    <div><span id="span3">password</span><input type="password" id ="password"></div>
                    <div class ="btn_info"><button type="submit" id="btn_annule" >Cancel</button><button type="submit" id="btn_modifier"> edit </button></div>
                </form>
            </div>

        </section>

    </main>

    <script src="./js/utilisateur.js"></script>
    <?php 
    include "./php/src/utilisateur.class.php";
    $utilisateur1=new utilisateur($_SESSION['id'],$_SESSION['nom'],$_SESSION['email'],$_SESSION['mot_de_passe'],$_SESSION['est_admin'],$_SESSION['image']);
    $utilisateur1->edit_info();
   
    
    ?>
</body>
</html>