<?php

$sth = $pdo->prepare('SELECT * FROM ware WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($ware = $sth->fetch(PDO::FETCH_ASSOC)) {

  if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('UPDATE ware SET name = :name, storage = :storage, price = :price, number = :number WHERE id = :id');
    $sth->execute(array(
      ':name' => $_POST['name'],
      ':storage' => $_POST['storage'],
      ':price' => $_POST['price'],
      ':number' => $_POST['number'],
      ':id' => $_GET['id'],
    ));

    header('Location: index.php');
    exit;
  }
  elseif (!empty($_POST['cancel'])) {
    header('Location: index.php');
    exit;
  }

  $storages = get_available_storages();

  ob_start();

  require __DIR__ . '/../view/form.php';

  $content = ob_get_clean();

  require __DIR__ . '/../view/main.php';
}
