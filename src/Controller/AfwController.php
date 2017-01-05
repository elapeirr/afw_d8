<?php 
namespace Drupal\afw\Controller;

class AfwController{
    public function content(){
        $build = array();
        $build[]= array(
        "#markup" => t("This will be ouravialable for work"),
        );
        return $build;
        
     
    }
}