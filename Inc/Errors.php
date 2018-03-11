<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 11.03.18
     * Time: 23:20
     */

    namespace pshell\Inc;


    class Errors
    {
        const ER_CODE_EMPTY_PARAMS = 10;
        const ER_CODE_CLASS_NOT_FOUND = 9;
        const ER_CODE_UNKNOWN_OPERATOR = 8;

        public static function emptyParams()
        {
            Output::writeLn('Необходим файл сценария ' . FILE_SCENARIO);

            return self::ER_CODE_EMPTY_PARAMS;
        }

        public static function classNotFound($className)
        {
            Output::writeLn('Класс  ' . $className . " не найден");

            return self::ER_CODE_CLASS_NOT_FOUND;
        }

        public static function unknownOperator($operator)
        {
            Output::writeLn('Неизвестный оператор ' . $operator);

            return self::ER_CODE_UNKNOWN_OPERATOR;
        }

    }