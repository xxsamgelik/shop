<?php
declare(strict_types=1);

namespace App\Logging\Telegram;


use Monolog\Logger;

final class TelegramLoggerFactory
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('telegram');
        return $logger->pushHandler(new TelegramLoggerHandler($config));
    }

}
