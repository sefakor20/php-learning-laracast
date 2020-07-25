<?php

// use an instance of the namespace for App
use App\Core\App;


// database config file
App::bind('config', require 'config.php');

// instanciate the connection and QueryBuilder class
App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

// function to load a page in the views folder
function view($name, $data = []) 
{
  extract($data);
  return require "./app/views/{$name}.view.php";
}


// function to redirect
function redirect($path)
{
  header("Location: /{$path}");
}