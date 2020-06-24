<?php

/**
 * Генератор данных для лабораторной
 * Заполняет файл случайными числами в качестве ключа
 * И их md5 хэшем в качестве информационного поля
 */

$n = 50;

$output = fopen("./data.txt", "w");

for ($i = 0; $i < $n; $i++)
{
    $key = rand(1, 1000);
    fwrite($output, "$key ".md5($key)."\n");
}

fclose($output);