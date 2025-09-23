<?php

namespace Otus\Diag;

use Bitrix\Main\Diag\FileExceptionHandlerLog;
use Bitrix\Main\Diag\ExceptionHandlerFormatter;

class FileExceptionHandlerLogCustom extends FileExceptionHandlerLog
{

public function write($exception, $logType)
    {
        $text = ExceptionHandlerFormatter::format($exception);

        $context = [
            'type' => static::logTypeToString($logType),
        ];

        $logLevel = static::logTypeToLevel($logType);
        $message = "otus - {date} - Host: {host} - {type} - {$text}\n";
        $this->logger->log($logLevel, $message, $context);
    }
}
