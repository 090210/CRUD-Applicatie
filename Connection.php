<?php
class Connection
{
    private static $server = "mysql:host=localhost;dbname=php8_opdr01a";
    private static $user = "root";
    private static $password = "";
    protected static $conn;

    public static function openConnection()
    {
        try {
            self::$conn = new PDO(self::$server,self::$user, self::$password);
            return self::$conn;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
}