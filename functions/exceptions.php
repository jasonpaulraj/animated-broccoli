<?php
class customException extends Exception
{

    public function errorMessage()
    {
        $errorMsg = "\e[0;31;40mError: \e[0m" . "\e[0;31;40m" . $this->getMessage() . "\e[0m\n";
        return $errorMsg;
    }
}

function myException($exception)
{
    echo "\e[0;33;40mWarning: \e[0m" . "\e[0;31;40m" . $exception->getMessage() . "\e[0m\n";
}
set_exception_handler('myException');
