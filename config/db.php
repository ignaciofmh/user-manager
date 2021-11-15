<?php

class Database{
    public function connect()
    {
        $db = new mysqli('localhost','root','','user_manager');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}