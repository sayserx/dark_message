<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	
	
    $name = $_GET["name"];
  
    echo $name;
   }

/*
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
*/