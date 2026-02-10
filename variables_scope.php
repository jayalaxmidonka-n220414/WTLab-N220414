<?php
$stringVar = "Hello Lab";      
$intVar = 100;                 
$floatVar = 12.5;              
$boolVar = true;               
$arrayVar = array("PHP", "JS"); 

echo "<h3>PHP Datatypes:</h3>";
var_dump($stringVar); echo "<br>";
var_dump($intVar);    echo "<br>";
var_dump($floatVar);  echo "<br>";
var_dump($boolVar);   echo "<br>";
var_dump($arrayVar);  echo "<br>";


$globalScope = "I am Global"; 

function testScopes() {
    global $globalScope;      
    $localScope = "I am Local"; 
    static $staticScope = 0;  

    $staticScope++;
    echo "<p>Global: $globalScope</p>";
    echo "<p>Local: $localScope</p>";
    echo "<p>Static Count: $staticScope (Increments every time the function is called)</p>";
}

echo "<h3>Variable Scopes:</h3>";
testScopes(); 
testScopes(); 
?>
