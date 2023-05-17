<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_soc'])){
    try{
        $id = $_POST["delete_soc"];
        $sql = 'DELETE FROM clanok_soc WHERE id_soc ='.$id;
        $db->conn->exec($sql);
        $sql2 = 'DELETE FROM soc WHERE id_soc_clanok =' . $id;
        $db->conn->exec($sql2);
        header('Location: ../../admin_mazanie.php');
        exit(); // Zabezpečí aby sa nevykonával žiaden ďalší kód
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>