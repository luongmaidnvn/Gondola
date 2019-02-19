<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/mowede/user/config/plugins/email.yaml',
    'modified' => 1546917498,
    'data' => [
        'enabled' => true,
        'from' => 'noreply@mowede.com',
        'from_name' => 'Mowede',
        'to' => 'hien.huynh@logigear.com',
        'to_name' => 'Admin',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp5.logigear.com',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'tan.trong.nguyen@logigear.com',
                'password' => '!@#123QWEqwe'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true,
        'bcc' => 'hien.huynh@logigear.com'
    ]
];
