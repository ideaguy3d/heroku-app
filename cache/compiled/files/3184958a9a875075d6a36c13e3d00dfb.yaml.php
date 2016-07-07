<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/heroku-php/user/plugins/email/email.yaml',
    'modified' => 1467849576,
    'data' => [
        'enabled' => true,
        'from' => 'javascript.uiux@gmail.com',
        'from_name' => 'Julius Alvarado',
        'to' => 'javascript.uiux@gmail.com',
        'to_name' => 'Julius Alvarado',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
