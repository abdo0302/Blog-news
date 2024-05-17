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

<section class="section-2">
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
        
        let contenar_utilisateurs=document.querySelector('.utilisateurs')
        let coontenar_articles=document.querySelector('.articless')
        let button_users=document.querySelector('.button_users')
        let button_articls=document.querySelector('.button_articls')
        coontenar_articles.style.display='none'
        
        button_users.onclick=()=>{
            contenar_utilisateurs.style.display='flex'
            coontenar_articles.style.display='none'
            
        }
        button_articls.onclick=()=>{
            contenar_utilisateurs.style.display='none'
            coontenar_articles.style.display='flex'
            console.log(coontenar_articles);
          }
    </script> 
</body>
</html>