<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 13.03.18
 * Time: 21:53
 */

namespace pshell\Commands;


use pshell\Inc\Command;

class CpCommand extends Command
{
    const SRC = 'src';
    const DEST = 'dest';

    public function execute()
    {
        $source = $this->item[self::SRC];
        $dest = $this->item[self::DEST];

        copy($source, $dest);
    }
}