<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

/**
 * @var CMain $APPLICATION
 */

$APPLICATION->SetTitle('Решение задачи: запись даты и времени в файл __bx_log.log');

//Определение переменной, в которую записываются дата/время. 
$log .= date("Y.m.d G:i:s")."\n";

//Штатное логирование в файл __bx_log.log
Bitrix\Main\Diag\Debug::writeToFile($log, $varName = '$log', $fileName =
'');
//Ошибка при делении на 0
//$m = 20/0;
?>
<html>
    <body>
        <a href="https://cz54708.tw1.ru/__bx_log.log">
            <href>Ссылка на файл __bx_log.log</href>
        </a>
    </body>
</html>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?>

