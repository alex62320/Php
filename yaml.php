<?php

use Symfony\Component\Yaml\Yaml;

require __DIR__.'/vendor/autoload.php';

$config = Yaml::parseFile(__DIR__.'/config.yaml');

dump($config);

$config['ip'] = '127.0.0.1';
$yaml = Yaml::dump($config);
dump($yaml);

file_put_contents(__DIR__.'/config.yaml', $yaml);