<?php

    namespace pshell;

    use pshell\Inc\Errors;
    use pshell\Inc\Executer;
    use pshell\Inc\Mode;

    require "config.php";
    require __DIR__ . "/vendor/autoload.php";

    if (!file_exists('build.php')) {
        exit(Errors::emptyParams());
    }

    if ($argc > 0) {
        foreach ($argv as $key => $val) {
            $arg = explode('=', $val);
            Mode::set(trim($arg[0] ?? '', '-'), trim($arg[1] ?? ''));
        }
    }

    $tasks = require __DIR__ . "/" . FILE_SCENARIO;

    foreach ($tasks as $task) {

        foreach ($task as $command => $arguments) {
            Executer::run($command, $arguments);
        }
    }