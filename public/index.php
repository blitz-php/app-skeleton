<?php

use BlitzPHP\Application;
use BlitzPHP\Http\ServerRequest;

$app = new Application();

$response = $app->run( ServerRequest::fromGlobals() );

