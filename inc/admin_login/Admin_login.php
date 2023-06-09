<?php
require('../config.php');
session_start();

$users = $User->get_users();
$db = new Database();
$data = [
    'admin_name' => $_POST["admin_name"],
    'admin_password' => $_POST["admin_password"],
];

if (isset($_POST['log_admin'])) {
    
    $query = "SELECT a_heslo FROM admin_t WHERE a_username=:admin_name";
    $query_run = $db->conn->prepare($query);
    $query_run->bindParam(':admin_name', $data['admin_name']);
    $query_run->execute();
    $result = $query_run->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $hashedPassword = $result['a_heslo'];
        
        if (hash('sha256', $data['admin_password']) === $hashedPassword) {
            $_SESSION['valid'] = true;
            $_SESSION['admin_name'] = $data['admin_name'];
           
            header('Location: ../../admin_panel.php');
        } else {
            echo 'Nesprávne heslo';
        }
    } else {
        echo 'Používateľ neexistuje';
    }
}
?>