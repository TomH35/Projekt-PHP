<?php
    
    class Listing{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_listing(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM apartments");
                $listing = $query->fetchAll(PDO::FETCH_OBJ);
                return $listing;
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Listing = new Listing();
    
?>