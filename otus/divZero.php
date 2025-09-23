<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

/**
 * @var CMain $APPLICATION
 */

$APPLICATION->SetTitle('Решение задачи: пользовательский класс логгера');


//Ошибка при делении на 0
$m = 20/0;

?>
<html>
    <body>
        <h2>Решение задачи: пользовательский класс логгера</h2>
        <a href="https://cz54708.tw1.ru/local/php_interface/logs/exceptions.log">
            <href>Ссылка на файл exceptions.log</href>
        </a>
    </body>
</html>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?>

