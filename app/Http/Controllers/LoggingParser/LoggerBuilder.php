<?php

namespace App\Http\Controllers\LoggingParser;

use Illuminate\Support\Facades\File;
use Monolog\Handler\GroupHandler;
use Monolog\Handler\WhatFailureGroupHandler;
use Monolog\Logger;

class  LoggerBuilder
{

    private static $channels = [];

    /**
     * Create a custom Monolog instance.
     *
     * @param array $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return self::getSystemLogger();
    }

    public static function log($level, $channel, $content = null, $context = [])
    {
        $path = "logs/$channel-" . date('Y-m-d') . '.log';
        if (!File::exists(storage_path($path)))
            file_put_contents(storage_path($path), json_encode(array()));

        $data = json_decode(File::get(storage_path($path)), true);

        if (empty($data[$context]))
            $data[$context] = array();

        array_push($data[$context], [time() => [
            'level' => $level,
            'content' => $content,
            'context' => $context
        ]]);
        //var_dump(json_encode($data,JSON_FORCE_OBJECT));
        File::replace(
            storage_path($path),
            json_encode($data, JSON_FORCE_OBJECT)
        );
    }

    public static function emergency($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::EMERGENCY, $channel, $content, $context);
    }

    public static function alert($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::ALERT, $channel, $content, $context);
    }

    public static function critical($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::CRITICAL, $channel, $content, $context);
    }

    public static function error($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::ERROR, $channel, $content, $context);
    }

    public static function warning($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::WARNING, $channel, $content, $context);
    }

    public static function notice($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::NOTICE, $channel, $content, $context);
    }

    public static function info($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::INFO, $channel, $content, $context);
    }

    public static function debug($channel = 'laravel', $content = null, $context = [])
    {
        self::log(Logger::DEBUG, $channel, $content, $context);
    }
}
