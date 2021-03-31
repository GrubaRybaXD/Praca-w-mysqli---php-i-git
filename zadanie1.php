<?php

$connect = mysqli_connect("localhost","user","passwd","imie");


if (mysqli_connect_errno()) {
  echo "Nie udało się połączyć z bazą danych " . mysqli_connect_error();
}else{
 echo "Połączono z bazą danych";
}
?>