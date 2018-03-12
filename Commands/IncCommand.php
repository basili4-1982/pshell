<?php

namespace pshell\Commands;

use pshell\Inc\Command;
use pshell\Inc\Executer;

class IncCommand extends Command
{
    public function execute()
    {
        Executer::run('Addition', [$this->item[0], 1]);
    }
}