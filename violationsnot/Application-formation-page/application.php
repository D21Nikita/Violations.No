<?php

$connect = new mysqli(
  'localhost',
  'root',
  '',
  'SiteBase'
);
if ($connect->connect_error) {
  die(' Connect Error (' . $connect->connect_errno . ') ' . $connect->connect_error);
} else
  print('Connect BD' . '<br>');

$user = "SELECT Surname FROM user ORDER BY Surname";

if ($result = $connect->query($user)) {
  echo "<select>";
  while ($obj = $result->fetch_object()) {
    echo "<option value = '$obj->Surname' > $obj->Surname </option>";
  }
  $result->free_result();
  echo "</select>";
}
$user = "SELECT Surname FROM user ORDER BY Surname";

if ($result = $connect->query($user)) {
  echo "<select>";
  while ($obj = $result->fetch_object()) {
    echo "<option value = '$obj->Surname' > $obj->Surname </option>";
  }
  $result->free_result();
  echo "</select>";
}
?>