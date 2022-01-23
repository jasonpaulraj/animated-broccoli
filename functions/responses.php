<?php
class customResponse
{

    public function info($message)
    {
        return "\e[0;34;40m" . $message . "\e[0m" . PHP_EOL;
    }

    public function warning($message)
    {
        return "\e[0;33;40m" . $message . "\e[0m" . PHP_EOL;
    }

    public function error($message)
    {
        return "\e[0;31;40m" . $message . "\e[0m" . PHP_EOL;
    }
}