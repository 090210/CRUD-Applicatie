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
    public $store;
    public $name;
    public $email;
    public $bericht;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'php8_opdr01a');
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->bericht = $_POST['bericht'];
        $this->store = "INSERT INTO contacts (name, email, message) VALUES ('".$this->name."','".$this->email."','".$this->bericht."')";

        var_dump($this->name, $this->email, $this->bericht);
        if ($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function storeInfo()
    {
        if (!isset($this->name) && isset($this->email) && isset($this->bericht)) {
            echo "Store failed";
        } else {
            if (isset($this->name) && isset($this->email) && isset($this->bericht)) {
                if ($this->conn->query($this->store) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $this->store . "<br>" . $this->conn->error;
                }
            }
        }
    }




}