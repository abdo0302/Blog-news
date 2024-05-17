<?php
session_start(); 

if (!isset($_SESSION['id'])) {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog news</title>
    <!--logo de page-->
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admin.css">
	</head>
<body>

<?php 
    include_once("data/users.php");
    include_once("php/connect.php");
    $users = getAll($conn);
    print_r($users);
?>

<!-- ========================= Aside ==================== -->

<aside class="">
    <div class="logo">BLOG News</div>
    <div class="photo_de_profl"><img src="img/<?php echo $_SESSION['image']?>" class="image" alt=""></div>
    <div class="info">
        <span class="Name"><?php echo $_SESSION['nom']; ?></span>
        <span class="email"><?php echo $_SESSION['email']; ?></span>
    </div>
<div class="buttons">
    <a href="#" class="button_users">Users</a>
    <a href="#" class="button_articls">Articles</a>


    <div class="button">
        <form action="index.php" method="POST">
            <input type="submit" value="Log out" name="log_out" class="log_out">
        </form>
    </div>
</aside>
<header>
    <!-- ========================= Topbar ==================== -->

<div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="user">
                    <img src="img/55.jpg" alt="">
                </div>
            </div>
</header>
<main >

<section >
    <section class="articless">
          <div>
             <div><h1>Business</h1></div>
             <div class="card_Business"></div>
             <div><h1>News and events</h1></div>
             <div class="card_News_and_events"></div>
             <div><h1>Recent articles</h1></div>
             <div class="card_Recent_articles"></div>
             <div><h1>Science Tech</h1></div>
             <div class="card_Science_Tech"></div>
             <div><h1>Specialized categories</h1></div>
             <div class="card_Specialized_categories"></div>
             <div><h1>article sport</h1></div>
             <div class="card_artecle_sport"></div>
          </div>
    </section>
</section>

<<<<<<< HEAD
<section class="section-2">
=======
 </section>

>>>>>>> f8da873b5abb458442830d0b14541fc3bdba3c43
<div class="utilisateurs" >
<div class="main-table">   
    <h3 class="mb-3">All users <a href="" class="btn btn-success">Add user</a></h3>  
    <?php if ($users != 0): ?>
    <table class="table t1 table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $kuser): ?>
                <tr>
                    <th scope="row"><?php echo $kuser['id']; ?></th>
                    <td><?php echo $kuser['nom']; ?></td>
                    <td><?php echo $kuser['email']; ?></td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert alert-info">empty!</div>
<?php endif; ?>


</div>
</div>
<section>

    <!--============={{section show article start}}=============-->
    <section class="contenar_show_article">
        <div class="contenar_article">
            <h2 class="tetle_article"></h2>
            <img src="" alt="" class="image_article">
            <p class="contnu_article"></p>
            <span ><span>date de creation: </span> <span class="dat"></span></span>
        </div>
        <div class="contenar_Commentaires">
            <span class="contenar_article">Commentaires</span>
            <div class="ccomants">
                uiluy
            </div>
            <div class="continar_form">
                <form action="index.php" method="POST" >
                    <input type="text" class="id_article" name="id_article">
                    <input type="text" name="input_text_comant" class="input_text_comant">
                    <input type="submit" name="button_submit_comant" class="button_submit_comant">
                </form>
            </div>
        </div>
    </section>
    <!--============={{section show article end}}=============-->

    <?php 
    try {
        include './php/connect.php';
        include './php/sign_up.php';
        include './php/sign_in.php';
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    include './php/section_sport.php';
    include './php/section_Science_Tech.php';
    include './php/section_Business.php';
    include './php/section_Recent_articles.php';
    include './php/section_Specialized_categories.php';
    include './php/section_News_and_events.php';
    ?>



    
    </main> 
    <?php
        
    //include './php/utilisateurs.php';
     
     ?>
    <script>
        let contenar_show_article=document.querySelector('.contenar_show_article')
        let contenar_utilisateurs=document.querySelector('.utilisateurs')
        let coontenar_articles=document.querySelector('.articless')
        let button_users=document.querySelector('.button_users')
        let button_articls=document.querySelector('.button_articls')
        coontenar_articles.style.display='none'
        
        button_users.onclick=()=>{
            contenar_utilisateurs.style.display='flex'
            coontenar_articles.style.display='none'
            contenar_show_article.style.display='none'
        }
        button_articls.onclick=()=>{
            contenar_utilisateurs.style.display='none'
            coontenar_articles.style.display='flex'
            contenar_show_article.style.display='none'
            console.log(coontenar_articles);
          }

          //section show article
let article=document.querySelectorAll('.article')
let tetle_article=document.querySelector('.tetle_article')
let image_article=document.querySelector('.image_article')
let dat=document.querySelector('.dat')
let contnu_article=document.querySelector('.contnu_article')
let image=document.querySelectorAll('.image_articles')
let tetle_articls=document.querySelectorAll('.tetle_articls')
let dats=document.querySelectorAll('.dats')
let conten=document.querySelectorAll('.conten')

let comants=document.querySelectorAll('.comants')
console.log(comants[0].innerHTML);
let ccomants=document.querySelector('.ccomants')
let id_article=document.querySelector('.id_article')
let id_de_articles=document.querySelectorAll('.idd')

console.log(contenar_show_article)
article.forEach((e,i)=>{
    e.addEventListener('click',()=>{
        id_article.value=id_de_articles[i].textContent
        ccomants.innerHTML=comants[i].innerHTML
        image_article.src=image[i].src
        tetle_article.textContent=tetle_articls[i].textContent
        dat.textContent=dats[i].textContent
        contnu_article.textContent=conten[i].textContent

        coontenar_articles.style.display='none'
        contenar_utilisateurs.style.display='none'
        contenar_show_article.style.display='flex'
    })
})


    </script> 
    <?php 
     //submit comant
    if(isset($_POST["button_submit_comant"]) && isset($_SESSION['nom'])){
        $comant=$_POST["input_text_comant"];
        $id_article=$_POST["id_article"];
        $sql = 'INSERT INTO Commentaires (contenu, auteur_id,article_id)
        VALUES ("'.$comant.'", '.$_SESSION["id"].','.$id_article.')';
        $conn->exec($sql);
}
    
    ?>
</body>
</html>