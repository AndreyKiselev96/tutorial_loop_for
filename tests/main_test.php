<?php
$filename = realpath(__DIR__ . '/../src/main.php');

function success($message)
{
    echo "\033[32m  [+] Успех\t", $message, PHP_EOL;
}

function error($message)
{
    echo "\033[31m [-] Ошибка\t", $message, PHP_EOL;
}

if (file_exists($filename)) {
    success('Файл: "src/main.php" существует');
    include $filename;
} else {
    error('Не найден файл: "src/main.php"');
    return 1;
}

function task1Test()
{
    ob_start();
    task1();
    $result = trim(str_replace(PHP_EOL, ' ', ob_get_contents()));
    ob_end_clean();

    $need = '1 2 3 4 5 6 7 8 9 10';
    if ($result == $need) {
        success('функция task1 отработало корректно');
    } else {
        error(sprintf("task1 вернул \"%s\", а нужно \"%s\"", $result, $need));
    }
}

function task2Test()
{
    ob_start();
    task2();
    $result = trim(str_replace(PHP_EOL, ' ', ob_get_contents()));
    ob_end_clean();

    $need = '2000 3000 4000';
    if ($result == $need) {
        success('функция task2 отработало корректно');
    } else {
        error(sprintf("task1 вернул \"%s\", а нужно \"%s\"", $result, $need));
    }
}

function task3Test()
{
    ob_start();
    task3();
    $result = trim(str_replace(PHP_EOL, ' ', ob_get_contents()));
    ob_end_clean();

    $need = '2 4 6 8 10 12';
    if ($result == $need) {
        success('функция task3 отработало корректно');
    } else {
        error(sprintf("task1 вернул \"%s\", а нужно \"%s\"", $result, $need));
    }
}

function task4Test()
{
    ob_start();
    task4();
    $result = trim(str_replace(PHP_EOL, ' ', ob_get_contents()));
    ob_end_clean();

    $need = '100 99 98';
    if ($result == $need) {
        success('функция task4 отработало корректно');
    } else {
        error(sprintf("task4 вернул \"%s\", а нужно \"%s\"", $result, $need));
    }
}

function task5Test()
{
    ob_start();
    task5();
    $result = trim(str_replace(PHP_EOL, ' ', ob_get_contents()));
    ob_end_clean();

    $need = '-1 0 1';
    if ($result == $need) {
        success('функция task5 отработало корректно');
    } else {
        error(sprintf("task5 вернул \"%s\", а нужно \"%s\"", $result, $need));
    }
}

function run()
{
    task1Test();
    task2Test();
    task3Test();
    task4Test();
    task5Test();
}

run();

