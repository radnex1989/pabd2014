<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Tudor', __DIR__.'/../src');
$loader->add('Angelescu', __DIR__.'/../src');
$loader->add('Acme', __DIR__.'/../src');
$loader->add('Sonia', __DIR__.'/../src');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
