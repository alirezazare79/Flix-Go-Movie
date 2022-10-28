<?php


// include 'User.php';

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $absolutePath = dirname(__FILE__);
        $this->pdo = new PDO("sqlite:$absolutePath/database.sqlite");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query(string $request)
    {
        return $this->pdo->query($request);
    }

    public function getUsers(): Array
    {
        $users = $this->pdo->query('SELECT * FROM user')
                     ->fetchAll();

        $userObject = [];
        // foreach ($users as $user) {
        //     $userObject[] = new User($user);
        // }

        return $userObject;
    }
}

?>