<?php
    
    class Clanok{
        public $db;
        function __construct()
        {
            $this->db = new Database(); //vytvorenie novej inštancie triedy Database
        }

        function get_clanok(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM clanok_soc"); //vykoná dotaz na získanie všetkých údajov z tabuľky
                $clanok = $query->fetchAll(PDO::FETCH_OBJ); //Načíta všetky riadky ako objekty pomocou PDO::FETCH_OBJ, všetky načítané objekty majú vlastnosť.
                return $clanok; //vráti všetky riadky
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Clanok = new Clanok();
    
?>