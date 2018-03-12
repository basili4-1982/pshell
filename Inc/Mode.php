<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 0:32
 */

namespace pshell\Inc;


class Mode
{
    protected static $mode = [];

    static function set($name, $val)
    {
        self::$mode[$name] = $val;
    }

    static function get($name)
    {
        return self::$mode[$name] ?? null;
    }

    static function isKey($name)
    {
        return isset(self::$mode[$name]);
    }


    static function isEnabledDeleted()
    {
        return !self::isKey('disable-delete')
            && !self::isKey('disable-unlink')
            && !self::isKey('disable-modify');
    }


    static function isPrintTaskNumber()
    {
        return self::isKey('print-step');
    }

    static function isDebug()
    {
        return self::isKey('debug');
    }

}