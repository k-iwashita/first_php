<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../php/css/style.css" />

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <pre>
      <?php
      require('dbconnect.php');
      
      $statement = $db->prepare('update memos set memo=? where id=?');
      $statement->execute(array($_POST['memo'], $_POST['id']));
      ?>
      <p>update!</p>
    </pre>
    <a href="index.php">back</a>
  </main>
</body>

</html>