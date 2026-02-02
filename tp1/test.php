<?php
$var = "Hello World!";
$bool = true;
echo gettype($var) . "<br>";
$varresult = $bool ? "C'est vrai!" : "C'est faux!";
echo $bool ? "C'est vrai!" : "C'est faux!";

if ($bool){
    echo "c'est vrai";
}else{
    echo "c'est faux";
}