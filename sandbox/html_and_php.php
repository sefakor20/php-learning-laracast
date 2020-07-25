<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & HTML</title>
  <style>
    header{
      background-color: #e3e3e3;
      text-align: center;
      padding: 2em;
    }
  </style>
</head>
<body>
  <!-- <header>
    <h1>
      <?php 
      
        $name = $_GET['name'];
        echo "Hello, $name"; 
      
      ?>
    </h1>
  </header> -->

  <header>
    <h1>
      <!-- <?php echo "Hello, " . $_GET['name']; ?> -->

      <!-- different way to echo items -->
      <!-- <?= "Hello, " . $_GET['name']; ?> -->

      <!-- sanitize special characters to html entities -->
      <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
    </h1>
  </header>

</body>
</html>