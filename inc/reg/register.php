<?php
require('../config.php');
$db = new Database();

if (isset($_POST['add_user'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    if (empty($user_name) || empty($user_email) || empty($user_password)) {
        echo 'Všetky polia musia byť vyplnené';
    } else {
        $query = "SELECT * FROM pouzivatelia WHERE p_email = :user_email";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([':user_email' => $user_email]);

        $existingUser = $stmt->fetch(PDO::FETCH_OBJ);

        if ($existingUser) {
            echo 'User so zadaným emailom už existuje';
        } else {
            $hashPass = hash('sha256', $user_password);

            $query = "INSERT INTO pouzivatelia (p_username, p_email, p_heslo) VALUES (:user_name, :user_email, :user_password)";
            $stmt = $db->conn->prepare($query);
            $stmt->execute([
                ':user_name' => $user_name,
                ':user_email' => $user_email,
                ':user_password' => $hashPass
            ]);

            header('Location: ../../thank_you_page.php');
            exit();
        }
    }
}
?>
