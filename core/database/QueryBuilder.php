<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


  // fetch all items from db
  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("SELECT * FROM {$table}");

    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  // insert values into the database
  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table, 
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );
    
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);

    } catch (Exception $e) {
      // die($e->getMessage()); // local
      die('Whoops, something went wrong'); // production
    }

  }
}