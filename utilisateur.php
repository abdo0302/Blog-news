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
    <title>Blog News</title>
    <!-- Page logo -->
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/utilisateur.css">
</head>
<body>
    <main>
        <!-- Aside bar -->
        <aside>
            <div class="logo">BLOG News</div>
            <div class="photo_de_profl"><img src="img/<?php echo $_SESSION['image']?>" class="image" alt=""></div>
            <div class="info">
                <span class="Name"><?php echo $_SESSION['nom']; ?></span>
                <span class="email"><?php echo $_SESSION['email']; ?></span>
            </div>
            <div class="button">
                <button id="btn_home" type="button">
                    <a href="index.php">Home</a>
                </button>
                <form action="index.php" method="POST">
                    <input type="submit" value="Log out" name="log_out" class="log_out">
                </form>
            </div>
        </aside>
        <section>
            <h3>Info User</h3>
            <!-- User info form -->
            <div class="info_user">
                <form action="utilisateur.php" method="POST" enctype="multipart/form-data">
                    <div class="photo_de_profl">
                        <img src="img/<?php echo $_SESSION['image']?>" class="image" alt="">
                    </div>
                    <div>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <span id="span1">Name</span>
                        <input type="text" id="name" name="name_input" class="non_input" value="<?php echo $_SESSION['nom']; ?>">
                    </div>
                    <div>
                        <span id="span2">Email</span>
                        <input type="text" id="email" name="email_input" class="email_input" value="<?php echo $_SESSION['email']; ?>">
                    </div>
                    <div>
                        <span id="span3">Password</span>
                        <input type="text" id="password" name="password" class="password_input" value="<?php echo $_SESSION['mot_de_passe']; ?>">
                    </div>
                    <div class="btn_info">
                        <input type="submit" id="btn_modifier" name="edit" value="Edit">
                        <button type="button" id="btn_annule">Ann</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php
    if (isset($_POST['edit'])) {
        include './php/connect.php'; // Ensure this file contains the database connection
        
        $name = $_POST['name_input'];
        $email = $_POST['email_input'];
        $password = $_POST['password'];

        $image = $_FILES['image'];
        $fil_p = "img/" . $image['name'];
        move_uploaded_file($image["tmp_name"], $fil_p);
        $photo=$image['name'];

        try {
            $sql = 'UPDATE utilisateurs SET nom=:name, email=:email, mot_de_passe=:password, image=:photo WHERE id=:id';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_SESSION['id']);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':photo', $photo);

            $stmt->execute();

            // Update session data
            if($_SESSION['nom']!==$name){
                echo '<script type="text/javascript">';
            echo 'setTimeout(() => {location.reload()},500);';
            echo '</script>';
            }
            $_SESSION['nom'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['image'] = $photo;
            $_SESSION['mot_de_passe']=$password;
            
        } catch (PDOException $e) {
            echo 'Update failed: ' . $e->getMessage();
        }
    }

   
    ?>
    <script src="./js/utilisateur.js"></script>
</body>
</html>
