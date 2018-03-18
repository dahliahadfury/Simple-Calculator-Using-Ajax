<?php

if(isset($error)){
echo 'hehehehehhehe:(';
}
else{
$bil1 = $_POST['ob1'];
$bil2 = $_POST['ob2'];
$op = $_POST['operator'];
    

function pertambahan($a, $b){
    return $a + $b;
}

function pengurangan($a, $b){
    return $a - $b;
}
function perkalian($a, $b){
    return $a * $b;
}

function pembagian($a, $b){
    return $a / $b;
} 

switch ($op){
    case '+' : $jum = pertambahan($bil1, $bil2);
       
         echo "$bil1 + $bil2 = $jum";
        
        break;
    case '-' : $jum = pengurangan($bil1, $bil2);
        
         echo "$bil1 - $bil2 = $jum";
        
        break;
    case '*' : $jum = perkalian($bil1, $bil2);
        
         echo "$bil1 * $bil2 = $jum";
        
        break;
    case '/' : $jum = pembagian($bil1, $bil2);
        echo "$bil1 / $bil2 = $jum";
        
        break;    
}

    
    
    
}
?>
    
