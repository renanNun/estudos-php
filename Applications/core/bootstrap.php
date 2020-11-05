<?php

use Applications\core\App;
use Applications\core\database\{QueryBuilder,Connection};

App::bind('config', require 'config.php');

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

?>