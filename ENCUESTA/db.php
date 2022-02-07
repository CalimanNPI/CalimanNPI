<?php
class DB
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'encuesta';
        $this->user = 'root';
        $this->pass = '123';
        $this->charset = 'utf8mb4';
    }

    public function connect()
    {
        try {
            $connection = 'mysql:host=' . $this->host
                . '; dbname=' . $this->db
                . ';charset=' . $this->charset;

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $connect = new PDO($connection, $this->user, $this->pass, $options);
            return $connect;
        } catch (PDOException $e) {
            print_r('error connection' . $e->getMessage());
        }
    }
}
