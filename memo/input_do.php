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
      

        // $db -> exec('insert into memos set memo="' . $_POST['memo'] . '", created_at=NOW()');

        $statement = $db -> prepare('insert into memos set memo="' . $_POST['memo'] . '", created_at=NOW()');
        $statement -> bindParam(1, $_POST["memo"]);
        $statement -> execute();
        echo 'succsess!';
      ?>
    </pre>
  </main>
</body>

</html>