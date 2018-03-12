<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 19:50
 */

namespace pshell\Commands;


use pshell\Inc\Command;

class CdCommand extends Command
{
    public function execute()
    {
        chdir($this->item);
    }
}