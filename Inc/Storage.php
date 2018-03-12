<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 0:10
 */

namespace pshell\Inc;


class Storage
{
    const STEP_INDEX = 'step-index';

    protected static $storage = [];

    protected static $index = 0;
    protected static $disabled = false;

    public static function set($name, $val)
    {
        self::$storage[$name] = $val;
    }

    public static function get($name)
    {
        if ($name == 'step-index') {
            return self::current();
        }

        return self::$storage[$name] ?? null;
    }

    public static function list()
    {
        return self::$storage;
    }

    public static function replace($variable)
    {
        return self::get(substr($variable, 1, -1));
    }

    public static function current()
    {
        return self::$index;
    }

    public static function setIndex($index)
    {
        self::$index = $index;
        self::disableNext(true);

        return self::$index;
    }

    public static function next($index)
    {
        self::$index = $index + 1;
        return self::$index;
    }

    public static function disableNext($disabled)
    {
        self::$disabled = $disabled;
        return true;
    }

    public static function isAvableNext()
    {
        if (self::$disabled) {
            self::disableNext(false);
            return false;
        }
        return true;
    }

}