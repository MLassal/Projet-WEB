<?php

try {
  $bdd = new PDO("mysql:host=localhost;db-name=glaive;charset=utf8","root", "root");

} catch (Exception $e) {
  die ('il y a une erreur'.$e->getMessage());
}
 ?>
