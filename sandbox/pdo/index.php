<?php
require 'functions.php';
require 'Task.php';

// create connection
$pdo = connectToDb();

// all tasks
$tasks = fetchAllTasks($pdo);


require 'index.view.php';
