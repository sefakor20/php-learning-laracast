<?php

// associative array
$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'web developer'
];

// push a new item to the array list
$person['name'] = 'Jeffrey';

// remove an item from the array list
unset($person['age']);

// die(var_dump($person));


//task array
$task = [
  'title' => 'Programming the web',
  'due' => '14-07-2020',
  'assigned_to' => 'Raphael Sefakor Adinkrah',
  'completed' => 'yes'
];


echo "<ul>";
  foreach($task as $key => $val){
    echo "<li><strong>$key</strong> $val</li>";
  }
echo "</ul>";

// require 'index.view.php';