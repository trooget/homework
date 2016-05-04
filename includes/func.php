<?php

function get_available_storages() {
  global $pdo;

  $sth = $pdo->prepare('SELECT * FROM storages ORDER BY id ASC');
  $sth->execute();

  $storages = array();
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $storages[] = $row;
  }

  return $storages;
}
