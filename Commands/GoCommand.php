<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 17:43
 */

namespace pshell\Commands;


use pshell\Inc\Command;
use pshell\Inc\Output;
use pshell\Inc\Storage;

class GoCommand extends Command
{
    public function execute()
    {
        $step = $this->item[0];
        if (in_array($step[0], ['+', '-'])) {
            $index = Storage::current();
            eval("\$index= Storage::current().$step");
            $step = $index;
        }

        Output::writeLn('Топаю на ' . $step);
        Storage::setIndex($step);
    }
}