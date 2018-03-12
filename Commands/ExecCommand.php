<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 12.03.18
 * Time: 19:51
 */

namespace pshell\Commands;


use pshell\Inc\Command;
use pshell\Inc\Storage;

class ExecCommand extends Command
{
    const COMMANDS = 'commands';
    const OUT = 'out';

    public function execute()
    {
        $commands = $this->item[self::COMMANDS] ?? [];
        $out = $this->item[self::OUT] ?? null;
        if (is_scalar($this->item)) {
            $commands = [$this->item];
        }

        foreach ($commands as $cmd) {
            if (!empty($out)) {
                $output = null;
                exec($cmd, $output);
                Storage::set($out, implode(PHP_EOL, $output));
            } else {
                exec($cmd);
            }
        }
    }
}