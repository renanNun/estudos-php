<?php

require 'vendor/autoload.php';
require 'Applications/core/bootstrap.php';

use Applications\core\{Router, Request};

Router::load('applications/routes/routes.php')
    ->direct(Request::uri(), Request::method());

?>