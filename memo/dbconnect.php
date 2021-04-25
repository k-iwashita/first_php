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
?>
