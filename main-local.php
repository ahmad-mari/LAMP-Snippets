<?php

$host = env("DB_HOST");
$dbName = env("DB_NAME");

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => "mysql:host={$host};dbname={$dbName}",
            'username' => env('DB_USER_NAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
            //'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [

                'class' => 'Swift_SmtpTransport',
                'host' => env('SMTP_HOST'),  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => env('SMTP_USERNAME'),
                'password' => env('SMTP_PASSWORD'),
                'port' => env('SMTP_PORT'), // Port 25 is a very common port too
                'encryption' => env('SMTP_ENCRYPTION'), // It is often used, check your provider or mail server specs
            ],
            'viewPath' => '@common/mail',
            'htmlLayout' => '@common/mail/layouts/html',
            'textLayout' => '@common/mail/layouts/text',
        ],
    ],
];
