<?php

namespace Library\Database;

use PDO;

class Connection
{
    protected PDO $pdo;
    
    public function __construct()
    {
        $config = require 'config.php';
        extract($config);
        
        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=UTF8", 
            $user, 
            $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
    
    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}