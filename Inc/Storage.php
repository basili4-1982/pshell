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
        protected static $storage = [];

        static function set($name, $val)
        {
            self::$storage[$name] = $val;
        }

        static function get($name)
        {
            return self::$storage[$name] ?? null;
        }

        static function replace($variable)
        {
            return self::get(substr($variable, 1, -1));
        }
    }