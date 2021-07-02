<?php
echo "bonjour c'est une calculatrice  "."<br>";
function calculator($n1,$oper,$n2){

if($oper=="+")
{
   $re=$n1+$n2;
}
else if($oper=="-")
{
     $re=$n1-$n2;
}
else if($oper=="*")
{
    $re=$n1*$n2;
}
else if($oper=="/")
{
     $re=$n1/$n2;
}
else 
{
    echo "invalide";
}
echo "le resulate est =>  ". $re;
}
echo calculator(30,"+",6);





?>