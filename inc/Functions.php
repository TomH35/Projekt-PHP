<?php

/** 
 * Vráti názov stránky
 * 
 */
function page_name(){
    $page_name = basename($_SERVER['SCRIPT_NAME'],".php");
    if($page_name=="index"){
        return "Domov";
    }else{
        return ucfirst($page_name);
    }    
}





?>