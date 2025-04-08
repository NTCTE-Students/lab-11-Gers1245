<?php
$text = 'Пароль: P@ssw0rd<br>Email: test@example.com';

$password = "P@ssw0rd";
$isValid = preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $password);
echo 'Пароль ' . ($isValid ? 'валиден' : 'невалиден');