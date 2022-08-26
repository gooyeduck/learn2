<?php
include_once('Database.php');
include('Session.php');
class User
{
    private $db;
    public function _construct()
    {
        $this->db = new Database();
    }
};
