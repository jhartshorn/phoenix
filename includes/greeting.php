<?php 

//random array function you can use or write your own
function randomArrayVar($array)
{
if (!is_array($array)){
return $array;
}
return $array[array_rand($array)];
}
 
//list of grettings as arary
 
$greeting= array(
             "aloha"=>"Aloha!",
             "ahoy"=>"Ahoy!",
             "bonjour"=>"Bonjour!",
             "hello"=>"Hello!",
             "hi"=>"Hi!",
			 "ohhai"=>"OH HAI!",
             "hola"=>"Hola!",
             "howdy"=>"Howdy!",
             "rawr"=>"Rawr!");
 
//echo greeting
echo (randomArrayVar($greeting));

?>