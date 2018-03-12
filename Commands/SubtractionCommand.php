<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 19:37
 */

namespace pshell\Commands;


use pshell\Inc\Command;
use pshell\Inc\Storage;

class SubtractionCommand extends Command
{
    public function execute()
    {
        $val = (int)Storage::get($this->item[0]);
        $val -= $this->item[1];
        Storage::set($this->item[0], $val);
    }
}