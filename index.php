<?php

use Common\Utils;

function customAutoload(string $className)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    require_once __DIR__ . "/src/$path.php";
}

spl_autoload_register('customAutoload');

$a = new \Goose(234); // FQCN

echo $a->fly();

$a = new \Dog(234);

echo $a->getAge();

$a = new Utils();
$a->f();

print_r(get_declared_classes());
//print_r(get_declared_interfaces());

echo PHP_EOL;
