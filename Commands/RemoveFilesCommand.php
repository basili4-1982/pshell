<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 12.03.18
     * Time: 0:40
     */

    namespace pshell\Commands;


    use pshell\Inc\Command;
    use pshell\Inc\Executer;
    use pshell\Inc\Mode;
    use pshell\Inc\Output;

    class RemoveFilesCommand extends Command
    {
        public function execute()
        {
            foreach ($this->item as $mask) {
                foreach (glob(getcwd() . DIRECTORY_SEPARATOR . $mask) as $file) {
                    $fileInfo = new \SplFileInfo($file);
                    if ($fileInfo->isWritable() && Mode::isEnabledDeleted()) {
                        unlink($file);
                    } else {
                        Executer::run('title', 'Эмуляция удаления файла ' . $file);
                    }
                }
            }
        }
    }