<?php
$text = 'Телефон: +7(999)123-45-67<br>Email: test@example.com';

preg_match_all("/[^a-zA-Zа-яА-Я0-9\s]/u", $text, $symbols);
echo 'Спецсимволы: ' . implode(', ', $symbols[0]);