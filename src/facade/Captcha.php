<?php

namespace yzh52521\captcha\facade;


/**
 * Class Captcha
 * @mixin \yzh52521\captcha\Captcha
 */
class Captcha
{
    protected static $_instance = null;


    public static function instance()
    {
        if (!static::$_instance) {
            static::$_instance = new \yzh52521\captcha\Captcha();
        }
        return static::$_instance;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return static::instance()->{$name}(... $arguments);
    }
}
