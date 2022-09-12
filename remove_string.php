<?php

function remove_letra(string $s): string {
  return substr($s,1,-1);
}

echo remove_letra("A ESPERA DE UM MILAGRE");

?>