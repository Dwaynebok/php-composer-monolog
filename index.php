<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once "vendor/autoload.php";
include "buttons.html";


use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\BrowserConsoleHandler;

$logger = new Logger('channel-name');
$logger->pushHandler(new BrowserConsoleHandler);

$msg = $_GET['message'];
$type = $_GET['type'];
switch ($type) {
    case "INFO":
        $logger->pushHandler(new StreamHandler('logs/info.log', Logger::INFO));
        $logger->info($msg);
        break;

    case "WARNING":
        $logger->pushHandler(new StreamHandler('logs/warning.log', Logger::WARNING));
        $logger->warning($msg);
        break;

    case "NOTICE":
        $logger->pushHandler(new StreamHandler('logs/notice.log', Logger::NOTICE));
        $logger->notice($msg);
        break;

    case "ERROR":
        $logger->pushHandler(new StreamHandler('logs/error.log', Logger::ERROR));
        $logger->error($msg);
        break;

    case "CRITICAL":
        $logger->pushHandler(new StreamHandler('logs/critical.log', Logger::CRITICAL));
        $logger->critical($msg);
        break;

    case "ALERT":
        $logger->pushHandler(new StreamHandler('logs/alert.log', Logger::ALERT));
        $logger->alert($msg);
        break;

    case "EMERGENCY":
        $logger->pushHandler(new StreamHandler('logs/emergency.log', Logger::EMERGENCY));
        $logger->emergency($msg);
        break;

    case "DEBUG":
        $logger->pushHandler(new StreamHandler('logs/debug.log', Logger::DEBUG));
        $logger->debug($msg);
        break;




}






