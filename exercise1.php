<?php
 class Date{
    public $date1,$date2;

    public function compareDate(){
        $date1=new DateTime("2013/09/04");
        echo "Date 1: ".date_format($date1,"Y/m/d")."<br>";
        $date2=new DateTime("1981-11-03");
        echo "Date 2: ".date_format($date2,"Y/m/d")."<br><br><br>";
        $difference = $date1->diff($date2);

        echo "Difference: " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days "; 

    }
    }

    $result= new Date();
    $result->compareDate();
    
?>