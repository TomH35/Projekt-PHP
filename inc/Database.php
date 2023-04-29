<?php
    class Database{
        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host=localhost;dbname=listings','root','');
            }catch(PDOException $e){
                var_dump($e->getMessage());
            }
        }
    }
    
?>