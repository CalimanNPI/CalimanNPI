<?php

include_once 'db.php';

class User extends DB
{
    private $name;
    private $username;
    private $password;

    public function userExist(string $user,  string $pass)
    {
        $stmt = $this->connection()
            ->prepare("SELECT * FROM login WHERE username = ? LIMIT 1");
        $stmt->bindParam(1, $user);
        $stmt->execute();

        foreach ($stmt as $value) {
            $this->password = $value['password'];
        }

        if (hash_equals($this->password, crypt($pass, '$2a$07$usesomesillystringforsalt$'))) {
            $this->password = "";
            return true;
        }

        return false;
    }

    public function setUser(string $user)
    {
        $stmt = $this->connection()->prepare("SELECT * FROM login WHERE username = :user");
        //$stmt->bindParam(':user', $user);
        $stmt->execute(['user' => $user]);

        foreach ($stmt as $currentUser) {
            $this->name = $currentUser['user'];
            $this->username = $currentUser['username'];
        }
    }

    public function getUser()
    {
        return $this->name;
    }

    public function newUser(string $name, string $username, string $pass)
    {
        $hash = crypt($pass, '$2a$07$usesomesillystringforsalt$');
        try {
            $stmt = $this->connection()->prepare("INSERT INTO login(user, username, password) VALUES(?,?,?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $username);
            $stmt->bindParam(3, $hash);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            print_r('Error in: ' . $e->getMessage());
        }
    }
}
