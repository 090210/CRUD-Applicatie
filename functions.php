<?php
require 'Connection.php';
class Functions extends Connection
{
    public $row;
    public function create($name, $email, $message)
    {
        Connection::openConnection();
        $db = Connection::$conn->prepare('INSERT INTO contacts (name, email, message) VALUES ((:name), (:email), (:message))');
        $db->bindParam(':name', $name);
        $db->bindParam(':email', $email);
        $db->bindParam(':message', $message);
        $db->execute();
        return (true);
    }

    public function read()
    {
        Connection::openConnection();
        $sql = 'SELECT * FROM contacts';
        foreach (Connection::$conn->query($sql) as $row) {
            echo "ID: $row[id] | name: $row[name] | e-mail: $row[email] | message: $row[message] |
            <a href='edit.php?edit=$row[id]'>edit</a>
            <a href='delete.php?del=$row[id]'>delete</a><br />";
        }
    }
    public function update()
    {
   
        Connection::openConnection();

    
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $sql = " SELECT * FROM contacts WHERE id= :id ";
            $stmt = Connection::$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $this->row = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $sql = "UPDATE contacts SET name = :name, email= :email, message = :message WHERE id= :id";
            $stmt = Connection::$conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            var_dump($name);
            // echo "<meta http-equiv='refresh' content='0;url=read.php'>";

    }
}

    public function delete()
    {
        Connection::openConnection();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $sql = "DELETE FROM contacts WHERE id='$id'";
            Connection::$conn->query($sql) or die("Failed");
            echo "Query deleted succesfully, go <a href='read.php'>back</a>";
        }
        if (isset($_GET['all'])) {
            $sql = "DELETE FROM contacts";
            Connection::$conn->query($sql) or die("Failed");
            echo "Query deleted everything, go <a href='read.php'>back</a>";
        }
    }

<<<<<<< HEAD
  
    
} 
=======
    // TODO: make edit gitpod test
    // function edit($name, $email, $message)
    // {
    //     Connection::openConnection();
    //     if (isset($_GET['edit'])) {
    //         $id = $_GET['edit'];
    //         $sql = Connection::$conn->prepare('SELECT * FROM contacts WHERE id = :id');
    //         $sql->bindParam(':id', $id);
    //         $sql->fetchAll();
    //     }
    //     if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    //         // $id = $_POST['id'];
    //         // $name = $_POST['name'];
    //         // $email = $_POST['email'];
    //         // $message = $_POST['message'];
    //         // Connection::openConnection();
    //         // $db = Connection::$conn->prepare('INSERT INTO contacts (name, email, message) VALUES ((:name), (:email), (:message))');
    //         // $db->bindParam(':name', $name);
    //         // $db->bindParam(':email', $email);
    //         // $db->bindParam(':message', $message);
    //         // $db->execute();
    //         // return (true);
    //         $sql = Connection::$conn->prepare('UPDATE contacts SET name= :name, email = :email, message = :message WHERE id= :id');
    //         $sql->bindParam(':name', $name);
    //         $sql->bindParam(':email', $email);
    //         $sql->bindParam(':message', $message);
    //         Connection::$conn->query($sql) or die("Failed");
    //         echo "<meta http-equiv='refresh' content='0;url=read.php'>";
    //     }
    // }
}
>>>>>>> 3f79594825228688e6585bf050b9ead8508c239c
