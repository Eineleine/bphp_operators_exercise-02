<?php

echo "Введите имя: \n";
$name = trim(fgets(STDIN));

echo "Введите фамилию: \n";
$family = trim(fgets(STDIN));

echo "Введите отчество: \n";
$surname = trim(fgets(STDIN));

$name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
$family = mb_convert_case($family, MB_CASE_TITLE, "UTF-8");
$surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");

$fullname = ucwords($family . ' ' . $name . ' ' . $surname);
$arrName = mb_str_split($name, 1, "UTF-8");
$arrSurname = mb_str_split($surname, 1, "UTF-8");
$arrFamily = mb_str_split($family, 1, "UTF-8");
$surnameAndInitials = ucwords($family . ' ' . $arrName[0] . '.' . ucfirst($arrSurname[0]) . '.');
$fio = strtoupper($arrFamily[0] . $arrName[0] . $arrSurname[0]);

fwrite(STDOUT, "Полное имя: '$fullname'" . PHP_EOL);
fwrite(STDOUT, "Фамилия и инициалы: '$surnameAndInitials'" . PHP_EOL);
fwrite(STDOUT, "Аббревиатура: '$fio'" . PHP_EOL);

