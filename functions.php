<?php

class Functions
{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $name;
    private $message;
    private $sql;
    private $email;
    public $conn;
    public $row;

    function dbConnection()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "php8_opdr01a";
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function addTo()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->message = $_POST['message'];
        $this->sql = "INSERT INTO contacts (name, email, message) VALUES 
		    ('$this->name', '$this->email','$this->message')";

        $result = $this->conn->query($this->sql);

        if (!$result) {
            die ("Oeps er is iets fout gegaan :( ");
        } else {
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        }

    }

    function read()
    {
        $res = mysqli_query($this->conn, "SELECT * FROM contacts");
        while ($row = mysqli_fetch_array($res))
            echo "ID: $row[id] | name: $row[name] | e-mail: $row[email] | message: $row[message] |
                <a href='edit.php?edit=$row[id]'>edit</a>
                <a href='delete.php?del=$row[id]'>delete</a><br />";
    }

    function delete()
    {
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $sql = "DELETE FROM contacts WHERE id='$id'";
            $res = mysqli_query($this->conn, $sql) or die("Failed");
            echo "Query deleted succesfully, go <a href='read.php'>back</a>";
        }
        if (isset($_GET['all'])) {
            $sql = "DELETE FROM contacts";
            $res = mysqli_query($this->conn, $sql) or die("Failed");
            echo "Query deleted everything, go <a href='read.php'>back</a>";
        }
    }

    function edit()
    {
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $res = mysqli_query($this->conn, "SELECT * FROM contacts WHERE id='$id'");
            $this->row = mysqli_fetch_array($res);
        }

        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $id = $_POST['id'];
            $sql = "UPDATE contacts SET name='$name', email='$email', message='$message' WHERE id='$id'";
            $res = mysqli_query($this->conn, $sql)
            or die("Could not update");
            echo "<meta http-equiv='refresh' content='0;url=read.php'>";
        }
    }

}