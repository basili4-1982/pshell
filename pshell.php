<?php

namespace pshell;

use pshell\Inc\Errors;
use pshell\Inc\Executer;
use pshell\Inc\Mode;
use pshell\Inc\Output;
use pshell\Inc\Storage;

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
$index = 0;
while ($index < count($tasks)) {
    $task = $tasks[$index];
    foreach ($task as $command => $arguments) {
        Executer::run($command, $arguments);
    }
    $index = Storage::current();
    if (Storage::isAvableNext()) {
        $index = Storage::next($index);
    }
}