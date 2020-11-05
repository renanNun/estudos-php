<?php

namespace Applications\core\database;

use PDO;
use PDOException;

class Connection
{
    /**
     * Create a new PDO Connection.
     * @param array $config
     */
    public static function make($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}

?>