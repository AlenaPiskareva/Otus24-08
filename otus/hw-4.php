<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

/**
 * @var CMain $APPLICATION
 */

$APPLICATION->SetTitle('Решение задачи: запись даты и времени в файл __bx_log.log');

?>

<html>
    <body>
        <h2>Решение задачи: запись даты и времени в файл __bx_log.log</h2>
        <a href="https://cz54708.tw1.ru/otus/debug.php">
            <href>Ссылка на debug.php</href>
        </a>

        <h2>Решение задачи: пользовательский логгер</h2>
        <div>
            <a href="https://cz54708.tw1.ru/otus/divZero.php">
                <href>Ссылка на файл с ошибкой</href>
            </a>
        </div>
        <div>
            <a href="https://cz54708.tw1.ru/local/php_interface/logs/exceptions.log">
                <href>Ссылка на файл exceptions.php</href>
            </a>
        </div>
    </body>
</html>

<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?>

