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
    try {
      $db = new PDO(
        'mysql:dbname=my_db;host=localhost;carset=utf-8',
        'root',
        'root'
      );
    } catch (PDOException $e) {
      echo 'error' . $e->getMessage();
    }

    // $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="momo", price=210, keyword="kandume, pinku, amai"');
    // echo $count . 'data';

    // $records = $db -> query('select * from my_items');
    // while( $record = $records-> fetch()) {
    //   print($record["item_name"]);
    // };


    $memos = $db -> query('select * from memos ORDER BY  id DESC');
    ?>

    <article>
    <?php
    while( $memo = $memos -> fetch()): 
    ?>
      <p><a href=""><?php print(mb_substr($memo['memo'], 0, 50));?></a></p>
      <time> <?php print($memo['created_at']);?></time>
      <hr>
    <?php endwhile; ?>

    </article>
  </main>
</body>

</html>