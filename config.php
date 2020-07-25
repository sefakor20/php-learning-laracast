<?php

// configuration 

return [

  // database config
  'database' => [
    'name' => 'laracast_mytodo',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]

];