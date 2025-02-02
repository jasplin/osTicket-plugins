<?php

return array(
    'id' =>             'storage:s3',
    'version' =>        '0.5',
    'ost_version' =>    '1.17', # Require osTicket v1.17+
    'name' =>           /* trans */ 'Attachments hosted in Amazon S3',
    'author' =>         'Jared Hancock, Kevin Thorne',
    'description' =>    /* trans */ 'Enables storing attachments in Amazon S3',
    'url' =>            'http://www.osticket.com/plugins/storage-s3',
    'requires' => array(
        "aws/aws-sdk-php" => array(
            'version' => "3.*",
            'map' => array(
                'aws/aws-sdk-php/src/{Api*,Arn*,ClientSideMonitoring*,Credentials*,DefaultsMode*,Endpoint*,Exception*,Handler*,Retry*,S3*,Signature*,*.php}' => 'lib/Aws',
                'aws/aws-sdk-php/src/data' => 'lib/Aws',
                'guzzlehttp/guzzle/src' => 'lib/GuzzleHttp',
                'guzzlehttp/promises/src' => 'lib/GuzzleHttp/Promise',
                'guzzlehttp/psr7/src/' => 'lib/GuzzleHttp/Psr7',
                'mtdowling/jmespath.php/src' => 'lib/JmesPath',
                'psr/http-client/src' => 'lib/Psr/Http/Client',
                'psr/http-factory/src' => 'lib/Psr/Http/Factory',
                'psr/http-message/src' => 'lib/Psr/Http/Message',
            ),
        ),
    ),
    'plugin' =>         'storage.php:S3StoragePlugin'
);

?>
