<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THE PHP PRACTITIONER</title>
</head>
<body>
  <ul>
    <?php foreach($tasks as $task): ?>
      <li>
        <?php if($task->completed): ?>
          <strike><?= $task->description ?></strike>
        <?php else: ?>
            <?= $task->description; ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>