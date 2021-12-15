<?php
/* Made by Unam Sanctam https://github.com/UnamSanctam */
$config = [];

$config['password'] = 'E:HP}4l8/~@bj,%4/rVCuO5XM#0~(::d#s3UMeY((^tdSq0/1DkwKGg_yu\4LLNe';

/*
 * If your web server uses Apache then there is no need to
 * change the db file location since the .htaccess file
 * will protect the database file from being accessed.
 * 
 * You can test if you are vulnerable by trying to access
 * WEBSITEURL/unamwebpanel.db (replace WEBSITEURL with your URL),
 * if it returns a 403 Forbidden error then you are protected
 */
$config['db_file'] = dirname(__FILE__)."/unamwebpanel.db";

$config['failedlogin_blocktime'] = 15;
$config['failedlogin_blocktries'] = 5;

$config['api_minreportime'] = 50;

$config['languages'] = ['en', 'sv'];

$config['unam_version'] = "1.3";

global $config;