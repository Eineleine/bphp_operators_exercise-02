<?php

echo "Введите имя: \n";
$name = trim(fgets(STDIN));

echo "Введите фамилию: \n";
$family = trim(fgets(STDIN));

echo "Введите отчество: \n";
$surname = trim(fgets(STDIN));

$fullname = ucwords($family . ' ' . $name . ' ' . $surname);
$arrName = str_split($name, 1);
$arrSurname = str_split($surname, 1);
$arrFamily = str_split($family, 1);
$surnameAndInitials = ucwords($family . ' ' . $arrName[0] . '.' . ucfirst($arrSurname[0]) . '.');
$fio = strtoupper($arrFamily[0] . $arrName[0] . $arrSurname[0]);

fwrite(STDOUT, "Полное имя: '$fullname'" . PHP_EOL);
fwrite(STDOUT, "Фамилия и инициалы: '$surnameAndInitials'" . PHP_EOL);
fwrite(STDOUT, "Аббревиатура: '$fio'" . PHP_EOL);