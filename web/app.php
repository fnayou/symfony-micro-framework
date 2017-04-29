<?php

use Symfony\Component\HttpFoundation\Request;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

$microKernel = new MicroKernel('prod', false);
$microKernel->loadClassCache();

$request = Request::createFromGlobals();
$response = $microKernel->handle($request);
$response->send();

$microKernel->terminate($request, $response);
