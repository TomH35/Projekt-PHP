<?php
    
    class Listing_apartments{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_listing_apartments(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM apartments");
                $listing_apartments = $query->fetchAll(PDO::FETCH_OBJ);
                return $listing_apartments;
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Listing_apartments = new Listing_apartments();
    
?>