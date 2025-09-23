<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

/**
 * @var CMain $APPLICATION
 */

$APPLICATION->SetTitle('Решение задачи FizzBuzz');

function fizzBuzz(int $limit): array
{
    $fizzBuzzCollection = []; 
    for ($i = 0; $i <= $limit; $i++){
                if ($i % 3 == 0){
            $fizzBuzzCollection[] = 'FIZZ';
        } elseif ($i % 5 == 0){
            $fizzBuzzCollection[] = 'BUZZ';
        } else{
            $fizzBuzzCollection[] = $i;
        }
    }

     return $fizzBuzzCollection;
}

dump(fizzBuzz(100));


require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?>