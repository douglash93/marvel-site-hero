<?php

use Marvel\Handlers\HttpErrorHandler;
use Marvel\Handlers\ShutdownHandler;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
define('VIEW_PATH', BASE_PATH . 'views/');
define('MARVEL_API_KEY', '[MARVEL_API_KEY_AQUI]');
define('MARVEL_PRIVATE_KEY', '[MARVEL_PRIVATE_KEY_AQUI]');

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$callableResolver = $app->getCallableResolver();
$responseFactory = $app->getResponseFactory();

$serverRequestCreator = ServerRequestCreatorFactory::create();
$request = $serverRequestCreator->createServerRequestFromGlobals();

$displayErrorDetails = true;
$errorHandler = new HttpErrorHandler($callableResolver, $responseFactory);
$shutdownHandler = new ShutdownHandler(
  $request,
  $errorHandler,
  $displayErrorDetails
);
register_shutdown_function($shutdownHandler);

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware($displayErrorDetails, false, false);
$errorMiddleware->setDefaultErrorHandler($errorHandler);

$app->get('/', \Marvel\Controllers\HeroController::class . ':list');
$app->get('/stories', \Marvel\Controllers\StorieController::class . ':getByHero');

$app->run();