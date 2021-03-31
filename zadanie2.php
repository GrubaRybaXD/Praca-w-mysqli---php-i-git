<?php
$polaczenie = new mysqli("localhost","user","passwd","imie");

if ($polaczenie -> connect_errno) {
  echo "Błąd połączenie" . $mysqli -> connect_error;

}

?>