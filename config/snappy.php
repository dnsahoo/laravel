<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => '/home/ubuntu/workspace/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64',
        'timeout' => false,
        'options' => array(),
        'env'     => array('production'),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => '/usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
