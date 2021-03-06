<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Ignored Files
    |--------------------------------------------------------------------------
    |
    | Maneuver will check .gitignore for ignore files, but you can conveniently
    | add here additional files to be ignored.
    |
    */
    'ignored' => array(),

    /*
    |--------------------------------------------------------------------------
    | Default server
    |--------------------------------------------------------------------------
    |
    | Default server to deploy to when running 'deploy' without any arguments.
    | If this options isn't set, deployment will be run to all servers.
    |
    */
    'default' => 'development',

    /*
    |--------------------------------------------------------------------------
    | Connections List
    |--------------------------------------------------------------------------
    |
    | Servers available for deployment. Specify one or more connections, such
    | as: 'deployment', 'production', 'stating'; each with its own credentials.
    |
    */

    'connections' => array(

        'development' => array(
            'scheme'    => 'ftp',
            'host'      => 'brastoua.ftp.ukraine.com.ua',
            'user'      => 'brastoua_ftp',
            'pass'      => '2MVDll0c57',
            'path'      => '/runsite.com.ua/enkorr/',
            'port'      => 21,
            'passive'   => true
        ),

        'production' => array(
            'scheme'    => 'ftp',
            'host'      => 'yourserver.com',
            'user'      => 'user',
            'pass'      => 'myawesomepass',
            'path'      => '/path/to/server/',
            'port'      => 21,
            'passive'   => true
        ),

        'cms' => array(
            'scheme'    => 'ftp',
            'host'      => 'runsite2.ftp.ukraine.com.ua',
            'user'      => 'runsite2_cms',
            'pass'      => 'am29t89v',
            'path'      => '/www/',
            'port'      => 21,
            'passive'   => true
        ),

    ),

);
