<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
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
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style css-->
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <!--============[[header start]]=================-->
    <header >
        <div class="contenar_nav_bar">
            <a href="#" class="logo home">Blog<span>News</span></a>
            <nav class="nav_bar_heder">
                <ul>
                    <li><a class="acteve home" href="#">Home</a></li>
                    <li>
                        <a href="#" class="button_categories">Catégories</a>
                        <!--nav categories-->
                        <div class="nav-categories">
                                <ul>
                                    <li><a>Sport</a></li>
                                    <li><a>Science & Tech</a></li>
                                    <li><a>Business</a></li>
                                </ul>
                        </div>
                    </li>
                    <li><a href="#" class="button_Authors">Authors</a></li>
                    <li class="sign">
                        <a href="#" class="button_sign_up"><i class="fa-solid fa-right-to-bracket"></i> SIGN UP</a>
                        <!--bar de sign up  start-->
                        <div class="contenar_sign_up">
                            <h2 class="tetle_sign_up">Create a Profile</h2>
                            <div class="profile">
                                <img src="./img/profile.png" alt="" class="image_profile"> 
                            </div>
                            <div class="contenat_info_sign_up">
                                <form action="index.php" method="POST"  enctype="multipart/form-data">
                                    <input type="text" placeholder="First & Last Name" name="name" id="name">
                                    <input type="text" placeholder="Email Address" name="email" id="email">
                                    <input type="password" placeholder="Create Password" name="password" id="password">
                                    <input type="file" name="image">
                                    <input type="submit" value="Sign Up" name="submit" id="submit">
                                </form>
                                
                            </div>
                            <a href="#" class="to_Sign_In">Already have an account? <span>Sign In</span></a>
                            
                        </div>
                        <!--bar de sign up  end-->
                    </li>
                    <li class="sign">
                        <a href="#" class="button_sign_in"><i class="fa-solid fa-circle-user"></i> SIGN IN</a>
                        <!--bar de sign in  start-->
                        <div class="contenat_SIGN_IN">
                            <h2 class="tetle_sign_in">User Login</h2>
                            <p class="p_sign_in">Welcome back. Enter your credentials to access your account</p>
                            <div class="contenar_info_sign_in">
                                <form action="index.php" method="POST">
                                     <div>
                                        <span>Email Address</span>
                                        <input type="text" name="emile_sign_in" id="emile_sign_in">
                                    </div>
                                    <div>
                                        <div class="c"><span>Password</span><span><i class="fa-solid fa-eye fa_eye"></i></span></div>
                                        <input type="password" name="Password_sign_in" id="Password_sign_in">
                                    </div>
                                    <input type="submit" value="Continue" class="submint_sign_in" name="submint_sign_in" id="submint_sign_in" >
                                </form>
                            </div>
                        </div>
                        <!--bar de sign in  end-->
                    </li>
                    <li>
                        <div class="info_utilisateur">
                            <h5 class="name"></h5>
                            <img class="images" src="./img/images.jpg" alt="">
                        </div> 
                        <!--nav bar de profile utilisateur-->
                        <div class="nav_bar_de_profile_utilisateur">
                            <div class="cotenar_button_close">
                                <a href="#" class="button_close"><i class="fa-solid fa-x"></i></a>
                            </div>
                            <div class="info">
                                <h5 class="name"></h5>
                                <img class="images" src="./img/images.jpg" alt="">
                            </div>
                            <hr>
                            <ul class="nav_info">
                                <li><a href="#" class="home">home</a></li>
                                <li><a href="./utilisateur.php">my profile</a></li>
                                <li><form action="index.php" method="POST"><input type="submit" value="log out" name="log_out" class="log_out"></form></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

          
    <!--header end -->

    <!--============[[main start]]=================-->
    <main class="section_header">
        <!--============{{section de home start}}============-->
        <section id="home">
            <div>
                <p>A comprehensive news site where you follow the latest developments in Arab and international events around the clock</p>
                <a href="#">TechnOur programsology</a>
            </div>
        </section>
        <!--section de home end-->

        <!--============{{section de Recent articles start}}============-->
        <section class="contenar_articles">
            <h5>Recent articles</h5>
            <div class="contenar_de_Recent_articles">
                <!-- les card-->
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
            </div>
        </section>
        <!--section de Recent articles end-->

        <!--============{{section de Specialized categories start}}============-->
        <section class="contenar_articles">
            <h5>Specialized categories</h5>
            <div class="contenar_de_Recent_articles">
                <!-- les card-->
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
            </div>
        </section>
        <!--section de Specialized categories end-->

        <!--============{{section de News and events start}}============-->
        <section class="contenar_articles">
            <h5>News and events</h5>
            <div class="contenar_de_Recent_articles">
                <!-- les card-->
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
                <div class="card">
                    <img src="./img/images.jpg" alt="">
                    <div class="div1"><span class="date">17 Jan 2022</span> <span class="nome_categori"></span>catégori</div>
                    <span class="tetle">lorem There is no one who</span>
                    <span class="button_read_more">Read more</span>
                </div>
            </div>
        </section>
        <!--section de News and events end--> 
    </main>
    <!--main end -->

    <!--============={{section de authors start}}=============-->
    <section class="section_authors section_header">
        <div class="contenar_authors">
            <h1>All Authors</h1>
            <div class="contenar_de_Recent_articles authors">
                <!-- les card-->
            </div>
        </div>
            
    </section>
        <!--============={{section de authors end}}=============-->

    <!--============={{section de blog start}}=============-->
    <section class="section_blog section_header">
        <div class="contenar_blog">
            <h1>Blog</h1>
        </div>
            
    </section>
        <!--============={{section de blog end}}=============-->        

    <!--============[[footer start]]=================-->
    <footer>
        <div class="section_footer">
            <!--abute footer-->
            <div class="abute_footer"> 
                <a href="#" class="logo_footer">Blog<span>News</span></a>
                <p>Welcome to the News section of our blog! Here you will find the latest articles and the most exciting news in different areas. We provide you with comprehensive coverage of global and local events, as well as in-depth analysis and varied opinions on current issues. Discover the latest news and stay constantly informed of everything that is happening in the world of current news and developments.</p>
           </div>
            <!--nav footer-->
            <div class="nav_footer">
                <ul>
                    <li><a href="#" class="home">Home</a></li>
                    <li><a href="#" class="button_blog">Blog</a></li>
                    <li><a href="#">catégories</a></li>
                    <li><a href="#">Auteurs</a></li>
                </ul>
            </div>
            <!--icone social media footer-->
            <div class="social_media">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-discord"></i>
            <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
            <!--bar coperite-->
        <div class="bar_coperite">
            <span>All rights reserved © 2024</span>
        </div>
    </footer>
    <!--footer end -->

    <script src="./js/home.js"></script>
    <?php
    if(isset($_POST['submit'])){
         $image = $_FILES['image'];
         $fil_p = "img/" . $image['name'];
         move_uploaded_file($image["tmp_name"], $fil_p);
         $photo=$image['name'];
              } 
?>
<?php
    try {
        include './php/connect.php';
        include './php/sign_up.php';
        include './php/sign_in.php';
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
    ?>
    <?php
    include './php/log_out.php';
    
    if(isset($_SESSION['nom'])&& !isset($_POST['log_out'])){
        if(!class_exists('utilisateur')){
            include "./php/src/utilisateur.class.php";
            $utilisateur1=new utilisateur($_SESSION['nom'],$_SESSION['email'],$_SESSION['mot_de_passe'],$_SESSION['est_admin'],$_SESSION['image']);
        } 
       $utilisateur1->sign_in();
    }
    ?>
   <?php
    $selects = $conn->query("SELECT * FROM utilisateurs WHERE est_admin=1");
    $results = $selects->fetchAll(PDO::FETCH_ASSOC);
    if (count($results) > 0) {
        $image_authors='';
        $nom_authors='';
        $email_authors='';
        foreach ($results as $row) {
            foreach($row as $a => $b){
                if($a == 'image'){
                    $image_authors=$b;
                }elseif($a == 'nom'){
                    $nom_authors=$b;
                }elseif($a == 'email'){
                    $email_authors=$b;
                }
            }
                echo '<script type="text/javascript">';
                echo 'var card = document.createElement("div");';
                echo 'card.classList = "card";';
                echo 'var img = document.createElement("img");';
                echo 'img.src = "img/'.$image_authors.'";';
                echo 'var div = document.createElement("div");';
                echo 'var span = document.createElement("span");';
                echo 'var email = document.createElement("span");';
                echo 'email.classList = "email";';
                echo 'email.textContent="'.$email_authors.'";';
                echo 'span.textContent="'.$nom_authors.'";'; // Added semicolon here
                echo 'div.appendChild(span);';
                echo 'div.classList = "div1";'; // Added semicolon here
                echo 'card.appendChild(img);';
                echo 'card.appendChild(div);';
                echo 'card.appendChild(email);';
                echo 'var authors = document.querySelector(".authors");';
                echo 'authors.appendChild(card);';
                echo '</script>';
        }
    }
?>

</body>
</html>