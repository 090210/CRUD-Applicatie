<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10-5-2019
 * Time: 11:12
 */
class DBConnect
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'php8_opdr01a');

        if ($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }


}