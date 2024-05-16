<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog news</title>
    <!--logo de page-->
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/admin.css">
	</head>
<body>
<main > 
        <aside >
        <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">BLOG News</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="users.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Articles</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">My profile</span>
                    </a>
                </li>
                <li>
                    <a href="blogphp/php/log_out.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
            <div class ="photo_de_profl"></div>
            <div class ="info">
                <span class ="nom">Admin</span>
                <span class ="emai">Admin@blocknews.com</span>
            </div>

        </aside>
        <section >

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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Articles</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7,842</div>
                        <div class="cardName">Likes</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
             <div class="articles">
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
             <div><h1>artecle sport</h1></div>
             <div class="card_artecle_sport"></div>
            </div>
        </section>
    </main>
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
    <script src="./js/admin.js"></script>
</body>
</html>