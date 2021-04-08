<?php

function nameFirstLetter($name) {
    return mb_strtoupper(mb_substr($name, 0, 1));
}

function convertFullName($string)
{
    $string = trim($string);
    $fio = preg_split("/[\s]+/", $string);
    $result = $fio[0] . " " . nameFirstLetter($fio[1]) . ". " . nameFirstLetter($fio[2]) . ".";
    return $result; // Результат: Фамилия И.О.
}

echo convertFullName('Иванов Иван Иванович');