<?php
    class Menu{
        public $menu;

        function __construct($menu){
            $this->menu = $menu;
        }
        function get_menu(){
            return $this->menu;
        }
    }
    $Header_menu = new Menu(array("Domov"=>"index.php",
                                  "SoC"=>"SoC.php",
                                  "Kontakt"=>"Kontakt.php",
                                  "Prihlasiť sa"=>"login.php",
                                  "Logout"=>"inc/login/Logout.php",
                        ));
    $Footer_menu = new Menu(array("SoC"=>"SoC.php",
                                  "Kontakt"=>"Kontakt.php",
                                  "Prihlasiť sa"=>"login.php",
                        ));
 function print_menu($menu){
     $menu_items = $menu->get_menu();
       foreach($menu_items as $page => $url){
        echo '<li class="nav-item"> 
        <a class="nav-link" aria-current="page" href="'.$url.'"><span class="custom-navbar-color">'.$page.'</span></a>
              </li>';
      }
   }


?>