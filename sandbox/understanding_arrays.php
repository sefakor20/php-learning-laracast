<?php

// create simple array
$names = [
  'Jeff',
  'John',
  'Mary'
];

$animals = [
  'Dog',
  'Goat',
  'Elephant',
  'Monkey',
  'Cat'
];


// filter through the array list using foreach loop
foreach($names as $name){
  echo $name . ', ';
}

echo "<br><br>";

foreach($animals as $animal){
  echo "
    <b>$animal</b>
  ";
}


// require 'index.view.php';
