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
            'out' => '',
            'name' => 'Маша',
            'index' => '3',
        ],
    ],
    [
        'dec' => ['index'],
    ],
    [
        'title' => 'Присвоение переменных -2',
        'variables' => [
            'test' => '%file%',
        ],

    ],
    [
        'title' => 'Удаление логов',
        'exec' => ['commands' => ['ls'], 'out' => 'out'],
    ],
    [
        'title' => 'ls - %out%',
    ],
    [
        'title' => 'if statiment',
        'if' => [
            'condition' => ['%index%', '==', 0],
            'then' => [
                'title' => 'GO -> %index%',
                'go' => 1
            ],
            'else' => ['title' => 'ВСЕ выход']
        ]
    ]
];