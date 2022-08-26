<?php

class Database
{
    private $db_hostname = 'localhost';
    private $db_username = 'root';
    private $db_password = '';
    private $db_name = 'learn2';
    public $pdo;

    public function __construct()
    {
        if (!isset($this->pdo)) {
            try {
                //code...
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
};
