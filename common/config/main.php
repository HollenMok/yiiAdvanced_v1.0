<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
        'renderers' =>[
        'html' =>[
        'class' => 'yii\smarty\ViewRenderer',
        		]
        		],
        ],
    ],
];
