<?php
class SoC_Clanok {
    public $db;
    
    function __construct() {
        $this->db = new Database();
    }

    function get_SoC_clanok($index) {
        try {
            $query = 'SELECT * FROM soc WHERE id_soc = ' . $index;
            $queryResult = $this->db->conn->query($query);
            $soc_clanok = $queryResult->fetchAll(PDO::FETCH_OBJ);
            return $soc_clanok;
        } catch(PDOException $e) {
            print_r($e->getMessage());
        }   
    }
}

$SoC_clanok = new SoC_Clanok();
?>