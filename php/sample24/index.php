<?php 
  session_start();
  $_SESSION['session_message'] = 'session'
?>

<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <title>PHP</title>
</head>

<body>
  <?php
    setcookie('save_message', 'cookie', time() + 60*60*24*14);
  ?>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
       <a href="page02.php"> aaa</a>
    </pre>
  </main>
</body>

</html>