<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 11.03.18
     * Time: 23:55
     */

    namespace pshell\Commands;

    use pshell\Inc\Command;
    use pshell\Inc\Storage;

    class VariablesCommand extends Command
    {

        public function execute()
        {
            foreach ($this->item as $key => $val) {
                Storage::set($key, $val);
            }
        }
    }