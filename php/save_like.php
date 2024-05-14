<?php

if(isset($_POST['article_id'])){
    echo '<script type="text/javascript">';
    echo 'console.log("behr");';
    echo '</script>';
   $articleId = $_POST['article_id'];
$selects = $conn->query('SELECT * FROM articlelikes WHERE ArticleID='.$articleId.' AND UserID='.$_SESSION["id"].'');
$results = $selects->fetchAll(PDO::FETCH_ASSOC);

if (count($results) == 0) {
    
}else{
    echo '<script type="text/javascript">';
    echo 'alert("trs")';
    echo '</script>';
}
 
}

?>