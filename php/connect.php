<?php
@$server='localhost';
@$login='root';
@$password='';
@$database='calc';
@$data='data';
@$conn=mysqli_connect($server,$login,$passowrd,$database) or die ("Wystąpił błąd połączenia z bazą danych");
?>