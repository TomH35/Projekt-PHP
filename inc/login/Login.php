<?php
require('../config.php');
session_start();

$users = $User->get_users();
$db = new Database();
$data = [
    'user_name' => $_POST["user_name"],
    'user_password' => $_POST["user_password"],
];

if (isset($_POST['log_user'])) {
    // Find the user
    $query = "SELECT p_heslo FROM pouzivatelia WHERE p_username=:user_name";
    $stmt = $db->conn->prepare($query);
    $stmt->bindParam(':user_name', $data['user_name']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $hashedPassword = $result['p_heslo'];
        // Compare the hashed password with the user-entered password
        if (hash('sha256', $data['user_password']) === $hashedPassword) {
            $_SESSION['valid'] = true;
            $_SESSION['user_name'] = $data['user_name'];
            // Redirect to the desired page
            header('Location: ../../index.php');
        } else {
            echo 'Nesprávne heslo';
        }
    } else {
        echo 'Používateľ neexistuje';
    }
}
?>
