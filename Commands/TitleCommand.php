<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 12.03.18
     * Time: 0:29
     */

    namespace pshell\Commands;


    use pshell\Inc\Command;
    use pshell\Inc\Mode;
    use pshell\Inc\Output;

    class TitleCommand extends Command
    {
        public function execute()
        {
            if (Mode::isDebug()) {
                Output::writeLn($this->item);
            }
        }

    }