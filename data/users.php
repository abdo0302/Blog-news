<?php
function getAll($conn){
    $sql = "SELECT id, nom, email FROM utilisateurs";
    $stm = $conn->prepare($sql);
    $stm->execute();

    if ($stm->rowCount() >= 1){
        $data = $stm->fetchAll();
        return $data;
    } else {
        return 0;
    }
}
?>
