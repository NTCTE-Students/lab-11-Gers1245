<?php
$text = "Привет, мир!";

$pattern = "/мир/i";
$result = preg_match($pattern, $text);
echo 'Найдено: ' . ($result ? 'да' : 'нет') . '<br>';

$pattern = "/^Привет/"; 
$result = preg_match($pattern, $text);
echo 'Найдено в начале: ' . ($result ? 'да' : 'нет') . '<br>';