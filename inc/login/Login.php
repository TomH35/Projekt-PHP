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
    // Vyhľadanie použivatela
    $query = "SELECT p_heslo FROM pouzivatelia WHERE p_username=:user_name";
    $stmt = $db->conn->prepare($query);
    $stmt->bindParam(':user_name', $data['user_name']);
    /*
    Naviaže parameter na priradené miesto v SQL dopyte.
    Táto metóda zabezpečuje správne spracovanie hodnoty parametra a jeho dátového typu.
    Použitím bindParam môže byť hodnota parametra neskôr dynamicky priradená.
    */
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    /*
    Používa sa súčasne s metódou prepare a execute na spracovanie výsledkov dotazu.
    Metóda fetch s parametrom PDO::FETCH_ASSOC zabezpečuje vrátenie riadku ako asociatívne pole, 
    kde kľúče sú názvy stĺpcov a hodnoty sú príslušné hodnoty riadku.
    */

    if ($result) {
        $hashedPassword = $result['p_heslo'];
        // Porovnanie hashovaného hesla so zadaným heslom
        if (hash('sha256', $data['user_password']) === $hashedPassword) {
            $_SESSION['valid'] = true;
            $_SESSION['user_name'] = $data['user_name'];
            // presmerovanie na požadovanú stránku
            header('Location: ../../index.php');
        } else {
            echo 'Nesprávne heslo';
        }
    } else {
        echo 'Používateľ neexistuje';
    }
}
?>
