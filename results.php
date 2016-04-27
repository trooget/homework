<?php
function get_dice_results($dice_type, $count) {
  $results = array();
  for($i = 0; $i < $count; $i++) {
    $results[] = rand(1, $dice_type);
  }

  return $results;
}
function filter_wrapper($dice_type, $count, $change, $min_value,  $trigger) {
  $results = get_dice_results($dice_type, $count);

  switch ($change) {
    case ">":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] <= $min_value) {
          unset($results[$i]);
        }
      }
      break;
    case ">=":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] < $min_value) {
          unset($results[$i]);
        }
      }
      break;
    case "<":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] >= $min_value) {
          unset($results[$i]);
        }
      }
      break;
    case "<=":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] > $min_value) {
          unset($results[$i]);
        }
      }
      break;
    case "==":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] != $min_value) {
          unset($results[$i]);
        }
      }
      break;
  }

  if($trigger == "asc") {
    sort($results);
    return $results;
  }
  elseif($trigger == "desc") {
    rsort($results);
    return $results;
  } else{
    return $results;
  }
}



function parser($command){
  $elements = explode(" ",$command);

  if ($elements[0] == "throw") {
    $th = $elements[0];
  } else{
    throw new Exception("Error");
  }

  if (is_numeric($elements[1])){
    $count = $elements[1];
  } else {
    throw new Exception("Error");
  }

  $dice = explode("d",$elements[2]);

  if ($dice[0] == "") {
    $d = $dice[0];
  }else{
    throw new Exception("Error");
  }

  if (is_numeric($dice[1])){
    $dice_type = $dice[1];
  } else{
    throw new Exception("Error");
  }

  if ($elements[3] == "filter"){
    $fil = $elements[3];
  }else{
    throw new Exception("Error");
  }

  if (($elements[4] == ">") || ($elements[4] == ">=") || ($elements[4] == "<") || ($elements[4] == "<=") || ($elements[4] == "==") ){
    $change = $elements[4];
  } else{
    throw new Exception("Error");
  }

  if (is_numeric($elements[5])){
    $min_value = $elements[5];
  } else {
    throw new Exception("Error");
  }

  if ($elements[6] == "sort"){
    $el = $elements[6];
  }else{
    throw new Exception("Error");
  }

  if (($elements[7] == "asc") || ($elements[7] == "desc")) {
    $trigger = $elements[7];
  }else{
    throw new Exception("Error");
  }

  return filter_wrapper($dice_type, $count, $change, $min_value,  $trigger);
}