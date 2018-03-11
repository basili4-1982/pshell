<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 12.03.18
     * Time: 1:16
     */

    namespace pshell\Commands;


    use pshell\Inc\Command;
    use pshell\Inc\Errors;
    use pshell\Inc\Executer;

    class IfCommand extends Command
    {
        const CONDITION = 'condition';
        const THEN = 'then';
        const ELSE = 'ELSE';

        public function execute()
        {
            $condition = $this->item[self::CONDITION] ?? [];

            $arg1 = $condition[0] ?? false;
            $operation = $condition[1] ?? '==';
            $arg2 = $condition[2] ?? false;

            $result = false;

            if (in_array($operation, ['==', '!=', '>', '<', '<=', '=>'])) {
                eval("\$result = '$arg1' $operation '$arg2';");
            } else {
                Errors::unknownOperator($operation);
            }


            if ($result) {
                $command = $this->item[self::THEN];
            } else {
                $command = $this->item[self::ELSE];
            }


            if (is_array($command)) {
                foreach ($command as $key => $val) {
                    Executer::run($key, $val);
                }
            }
        }

    }