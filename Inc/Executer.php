<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 11.03.18
 * Time: 23:58
 */

namespace pshell\Inc;


class Executer
{
    public static function run($command, $item)
    {
        $commandName = 'pshell\Commands\\' . ucfirst("{$command}Command");

        if (class_exists($commandName)) {
            /**
             * @var $cmd Command
             */
            $cmd = new $commandName(self::variable($item));
            $cmd->execute();
        } else {
            Errors::classNotFound($commandName);
        }
    }

    public static function variable($item)
    {
        if (!is_array($item)) {
            $item = [$item];
        }
        $result = [];
        foreach ($item as $key => $val) {
            if ($key[0] == '%' && $key[strlen($key) - 1] == '%') {
                $key = Storage::replace($key);
            }

            if (empty($val)) {
                continue;
            }

            if (is_scalar($val)) {
                if ($val[0] == '%' && $val[strlen($val) - 1] == '%') {
                    $val = Storage::replace($val);
                }
            } else {
                $val = self::variable($val);
            }
            $result[$key] = $val;
        }

        return $result;
    }
}