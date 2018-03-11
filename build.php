<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 11.03.18
     * Time: 23:48
     */


    return [
        [
            'title' => 'Присвоение переменных -1 ',
            'variables' => [
                'file' => 'asda',
                'name' => 'Маша',
            ],

        ],
//        [
//            'title' => 'Присвоение переменных -2',
//            'variables' => [
//                'test' => '%file%',
//            ],
//
//        ],
//        [
//            'title' => 'Удаление логов',
//            'removeFiles' => ['logs/*.log'],
//        ],
        [
            'title' => 'if statiment',
            'if' => [
                'condition' => ['%file%', '==', 'asda'],
                'then' => ['title' => 'then'],
                'else' => ['title' => 'else']
            ]
        ]
    ];