<?php

namespace AppBundle\Twig;

class HelperVistas extends \Twig_Extension{
    
    public function getFunctions(){
        return array(
            'generateTable'=> new \Twig_Function_Method($this, 'generateTable')
        );
    }
    
    public function generateTable($products){
        $table="<table class='table' border=1>";
        for($i=0;$i<count($products);$i++)
        {
            $table.="<tr>";
            for($z=0;$z<count($products[$i]);$z++)
            {
                $results= array_values($products[$i]);
                $table.="<td>".$results[$z]."</td>";
            }
            $table.="</tr>";
        }
        $table.="</table>";
        return $table;
    }
    
    public function getName(){
        return "app_bundle";
    }
}

