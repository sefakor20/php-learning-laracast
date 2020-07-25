<?php

// create connection to the database
function connectToDb()
{
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=laracast_mytodo', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// fetch all tasks
function fetchAllTasks($pdo)
{
  // prepare sql statement
$statement = $pdo->prepare('SELECT * FROM todos');

// execute sql statement
$statement->execute();

// fetch result with a class method
return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

// dump data on to the screen
function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}


// night club function checker
function nightClubChecker($age){
  if($age <= 15) {
    echo 'You are not old enough';
  } else {
    echo 'Come on in';
  }
}
