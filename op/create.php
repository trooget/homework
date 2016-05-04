<?php

$repo = array(
  'name' => '',
  'price' => '',
  'number' => '',
);

if (!empty($_POST['save'])) {
  $sth = $pdo->prepare('INSERT INTO ware (name, storage, price, number) VALUES (:name, :storage, :price, :number)');
  $sth->execute(array(
    ':name' => $_POST['name'],
    ':storage' => $_POST['storage'],
    ':price' => $_POST['price'],
    ':number' => $_POST['number'],
  ));

  header('Location: index.php');
  exit;
}

$storages = get_available_storages();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
