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
    <h2>practice</h2>
    <?php
    require('dbconnect.php');

    // $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="momo", price=210, keyword="kandume, pinku, amai"');
    // echo $count . 'data';

    // $records = $db -> query('select * from my_items');
    // while( $record = $records-> fetch()) {
    //   print($record["item_name"]);
    // };
    $id = $_REQUEST['id'];
    if (!is_numeric($id) || $id < 0) {
      print('１以上の数字で指定して！');
      exit();
    }

    $memos = $db->prepare('select * from memos where id=?');
    $memos->execute(array($id));
    $memo = $memos->fetch();
    ?>

    <article>
      <?php print($memo["memo"]); ?>

      <a href="index.php">back</a>
    </article>
  </main>
</body>

</html>