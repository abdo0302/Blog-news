<?php
if(isset($_POST['log_out'])){
    session_destroy();
    echo '<script type="text/javascript">';
    echo 'var signs = document.querySelectorAll(".sign");';
    echo 'var inf_utilisateur = document.querySelector(".info_utilisateur");';
    echo 'inf_utilisateur.style.display="none";'; 
    echo 'signs.forEach(function(sign) { sign.style.display="flex"; });';
    echo '</script>';
}
?>