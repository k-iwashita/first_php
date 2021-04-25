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
      try {
        $db = new PDO('mysql:dbname=my_db;host=localhost;charset=utf8', 'root', 'root');

        // $db -> exec('insert into memos set memo="' . $_POST['memo'] . '", created_at=NOW()');

        $statement = $db -> prepare('insert into memos set memo="' . $_POST['memo'] . '", created_at=NOW()');
        $statement -> execute(array($_POST['memo']));
        
        echo 'success!';
      } catch(PDOException $e) {
        echo 'error' . $e -> getMessage();
      };
      ?>
    </pre>
  </main>
</body>

</html>