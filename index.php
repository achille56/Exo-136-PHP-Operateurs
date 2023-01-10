<?php

// Premiere ligne
$n1 = 10;
$n2 = 5;
echo $n1 * $n2 . "<br>";

//Deuxieme ligne
$n3 = 10;
$n4 = 2;
echo $n3 * $n4 . "<br>";

//Troisieme ligne
$a = 2;
$b = 2;

if($a == $b) {
    echo "<br><br>a est identique à b" . "<br>";
}

//Quatrieme ligne
if($a != $b) {
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if($arr1 == $arr2) {
    echo "<br><br>les tableaux ont le même contenu";
}
else {
    echo "les tableaux ont pas le meme contenu";
}

