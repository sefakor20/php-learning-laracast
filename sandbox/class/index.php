<?php
require 'functions.php';

class Task {
  public $description;

  public $completed = false;

  public function __construct($description)
  {
    // Automatically triggered on instantiation
    $this->description = $description;
  }

  // complete a task
  public function complete()
  {
    $this->completed = true;
  }

  // check whether a task is completed
  public function isComplete()
  {
    return $this->completed;
  }

}

// instanciate a new task object
$tasks = [
  new Task('Go to the store'), 
  new Task('Finish my screencast'), 
  new Task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';