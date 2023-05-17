<?php
class SoC_update_clanok {
    public $db;
    
    function __construct() {
        $this->db = new Database();
    }

    function get_update_soc_clanok() {
        try {
            $query = 'SELECT * FROM soc';
            $queryResult = $this->db->conn->query($query);
            $soc_update_clanok = $queryResult->fetchAll(PDO::FETCH_OBJ);
            return $soc_update_clanok;
        } catch(PDOException $e) {
            print_r($e->getMessage());
        }   
    }
}

$SoC_update_clanok = new SoC_update_clanok();


?>