<?php

namespace pshell\Commands;

use pshell\Inc\Command;
use pshell\Inc\Executer;

class DecCommand extends Command
{
    public function execute()
    {
        Executer::run('Subtraction', [$this->item[0], 1]);
    }
}