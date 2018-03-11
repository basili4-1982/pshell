<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 11.03.18
     * Time: 23:46
     */

    namespace pshell\Inc;


    class Output
    {
        public static function write($message)
        {

            if (is_array($message)) {
                $message = self::convertArrayToString($message);
            }

            echo $message;
        }

        public static function writeLn($message)
        {
            echo self::write($message);
            echo PHP_EOL;
        }

        protected static function convertArrayToString($array)
        {
            return implode(',', $array);
        }

    }