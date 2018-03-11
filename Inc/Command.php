<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 11.03.18
     * Time: 23:55
     */

    namespace pshell\Inc;


    abstract class Command
    {
        protected $item = [];

        abstract public function execute();

        public function __construct($item)
        {
            $this->item = $item;
        }
    }