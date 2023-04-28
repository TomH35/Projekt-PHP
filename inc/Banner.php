<?php
    class Banner{
        public $heading;

        function __construct(){
            
        }
        
        function get_heading($page){
            switch($page){
                case 'index':
                    return $this->heading = "Over 36,500+ Active Listings";
                    break;
                case 'category':
                    return $this->heading = "Categories with Simple Tabs";
                    break;
                case 'contact':
                    return $this->heading = "Keep in touch with us";
                    break;
                case 'listing':
                    return $this->heading = "Check Out Our Listings";
                    break;
            } 
        }
        function get_heading2($page2){
            switch($page2){
                case 'index':
                    return $this->heading = "Find Nearby Places &amp; Things";
                    break;
                case 'category':
                    return $this->heading = "We have a wide range of business categories for you";
                    break;
                case 'contact':
                    return $this->heading = "Feel free to send us a message about your business needs";
                    break;
                case 'listing':
                    return $this->heading = "Item listings of Different Categories";
                    break;
            } 
        }

    }
    $Banner = new Banner();
?>