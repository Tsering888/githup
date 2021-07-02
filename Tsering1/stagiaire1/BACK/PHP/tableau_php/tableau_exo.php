<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

//  Exercice - 1
echo " Exercice - 1" ."<br>";
    $valid = $a["19002"] ;
$i = 0 ;
       foreach($valid as $sub_valid)
       {
           $i++ ;
           if($sub_valid == "Validation")
           {
               echo "La semaine de validation pour le 2ème groupe est la $i<sup>ème</sup> semaine<br><br><br/>";
               break ;
           }
        }
// Exercice - 2

echo " Exercice - 2" ."<br>";

$position = $a['19001'];
$i=0;
foreach ($position as $derniere_position)
{
    $i++;
    if($derniere_position == "Validation" )
    
    
    {
        echo " la position de la derniere occurance de stage pour le groupe 19001 est  :".($i-1)."<sup>ème</sup><br><br><br> ";
        break;
    }

}


// Exercice - 3

echo " Exercice - 3" ."<br>";



foreach($a as $code => $value)
{
    echo $code." : "."<br><br>";
}  


// Exercice - 4

echo " Exercice - 4" ."<br>";


$i=0;
foreach($a['19003'] as $duration)
{
    $i++;
if($duration == "Validation")
{
echo " ça dura $i semaines";
}
}

?>    

