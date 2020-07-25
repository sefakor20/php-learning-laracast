<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THE PHP PRACTITIONER</title>
</head>
<body>
  <h1>Task For The Day</h1>

  <ul>
    <li>
      <strong>Name: </strong><?= $task['title']; ?>
    </li>
    <li>
      <strong>Due Date: </strong><?= $task['due']; ?>
    </li>
    <li>
      <strong>Assigned to: </strong><?= $task['assigned_to']; ?>
    </li>
    <li>
      <strong>Status: </strong>
      <!-- <?php if($task['completed']){
        echo '&#9989';
      } else {
        echo 'Incomplete';
      }
      ?> -->

      <?php if($task['completed']): ?>
        <span class="icon">&#9989;</span>
      <?php else: ?>
        <span class="icon">Incomplete</span>
      <?php endif; ?>
    </li>
  </ul>

</body>
</html>