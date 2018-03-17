<?php

namespace projeto;
require __DIR__.'/../vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = Response::create();

$conteudo = '<h1>Vai Tricolor!</h1>';
$response->setContent($conteudo);
$response->send();


echo 'ola';