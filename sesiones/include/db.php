<?php
class DB
{
    private  $DB_DRIVE;
    private  $DB_HOST;
    private  $DB_NAME;
    private  $DB_LOGIN;
    private  $DB_PASS;

    public function __construct()
    {
        $this->DB_DRIVE = 'mysql';
        $this->DB_HOST = 'localhost';
        $this->DB_NAME = 'listUsers';
        $this->DB_LOGIN = 'root';
        $this->DB_PASS = '123456';
    }

    public function connection()
    {
        try {
            $connection = $this->DB_DRIVE . ':host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME;
            $db = new PDO($connection, $this->DB_LOGIN, $this->DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }
}
