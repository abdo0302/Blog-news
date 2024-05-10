<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe,image)
    VALUES (:firstname, :lastname, :email,'$GLOBALS[photo]')");
    $stmt->bindParam(':firstname', $name);
    $stmt->bindParam(':lastname', $email);
    $stmt->bindParam(':email', $password);
    $stmt->execute();
  }
?>