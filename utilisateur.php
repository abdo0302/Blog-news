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
        <aside >
            <div class ="logo">BLOG News</div>
            <div class ="photo_de_profl"></div>
            <div class ="info">
                <span class ="nom">ayoub</span>
                <span class ="emai">exmple.@gmail.com</span>
            </div>
            <div class ="button"> <button id="btn_home" type="submit"> <a href="index.php">Home</a></button> <button id="btn_Logout" type="submit">Logout</button></div>
    
        </aside>
        <section >
            <H3 >INFo User</H3>
            <div id="info_user">
                <div class ="photo_de_profl"></div>
                <div><input type="file"></div>
                <div><span id="span1">name</span><input type="text"></div>
                
                <div><span id="span3">email</span><input type="text"></div>
                <div><span id="span4">password</span><input type="text"></div>
                <div class ="btn_info"><button type="submit" id="btn_annule" >annule</button><button type="submit" id="btn_modifier">modifier</button></div>
            </div>
        </section>
    </main>

    <script src="./js/utilisateur.js"></script>
</body>
</html>