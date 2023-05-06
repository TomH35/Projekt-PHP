<?php
    
    class Clanok{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_clanok(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM clanok_soc");
                $clanok = $query->fetchAll(PDO::FETCH_OBJ);
                return $clanok;
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Clanok = new Clanok();
    
?>