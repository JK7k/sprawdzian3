<?php

// Pobierz dane z pliku "walidacja.php"
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];

echo "Imię: $name<br>";
echo "Nazwisko: $surname<br>";
echo " Nazwa użytkownika: $username<br>";
echo " Hasło: $password<br>";
echo " Płeć: $gender<br>";

