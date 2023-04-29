<?php
    
    class Listing_food{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_listing_food(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM food_life");
                $listing_food = $query->fetchAll(PDO::FETCH_OBJ);
                return $listing_food;
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Listing_food = new Listing_food();
    
?>