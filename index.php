<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello', function () {
  echo "Append a forwardslash followed by your name to the URI and hit enter'";
});

$app->get('/hello/:name', function ($name) {
  echo "Hello, $name!";
});

$app->run();
