<?php

// Pobierz dane z formularza
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

// Sprawdź, czy wszystkie pola są uzupełnione
if (empty($name) || empty($surname) || empty($username) || empty($password) || empty($confirm_password) || empty($gender)) {
  // Jeśli którekolwiek z pól jest puste, wyświetl komunikat o błędzie
  echo 'Wszystkie pola są wymagane';
  exit;
}

// Sprawdź, czy hasła są takie same
if ($password != $confirm_password) {
  // Jeśli hasła są różne, wyświetl komunikat o błędzie
  echo 'Hasła nie są takie same';
  exit;
}

// Sprawdź, czy hasło ma minimum 8 znaków
if (strlen($password) < 8) {
  // Jeśli hasło jest krótsze niż 8 znaków, wyświetl komunikat o błędzie
  echo 'Hasło musi mieć co najmniej 8 znaków';
  exit;
}

// Sprawdź, czy hasło zawiera cyfrę, małą literę i dużą literę
if (!preg_match('/[0-9]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
  // Jeśli hasło nie zawiera cyfry, małej litery lub dużej litery, wyświetl komunikat o błędzie
  echo 'Hasło musi zawierać co najmniej jedną cyfrę, małą literę i dużą literę';
  exit;
}

// Jeśli wszystkie warunki zostały spełnione, przejdź do strony z wyświetleniem danych
header('Location: dane.php');
exit;