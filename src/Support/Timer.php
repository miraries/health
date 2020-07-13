<?php

namespace PragmaRX\Health\Support;

class Timer
{
    public static function start()
    {
        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Timer::class
            : \PHP_Timer::start();
    }

    public static function stop()
    {
        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Ti
            : \PHP_Timer::stop();
    }
}
