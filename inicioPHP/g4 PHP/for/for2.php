<?php

  $quantidade = $_POST ['quantidade'];

  for($i = 1; $i <= $quantidade; $i++) {
  echo "Nome do participante ".$i.": <input type='text' name='".$i."'/><br><br>";
}
?>