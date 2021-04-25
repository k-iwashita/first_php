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
      if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $statement = $db->prepare('delete from memos  where id=?');
        $statement->execute(array($id));
      }
      ?>
      <p>delete!</p>
    </pre>
    <a href="index.php">back</a>
  </main>
</body>

</html>