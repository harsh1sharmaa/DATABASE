<?php
include_once('DB.php');

class User extends DB
{
    // public int $user_id;
    public string $username;
    public string $password;
    public string $email;

    public function __construct($username, $password, $email)
    {
        // $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function addUser($user)
    {
        $name = $user->username;
        $pswrd = $user->password;
        $email = $user->email;


        try {

            $conn = DB::getInstance();
            $sql = "INSERT INTO user (username, password, email,role,permission)
        VALUES ('$name', '$pswrd', '$email','customer','false')";
            // use exec() because no results are returned
            $conn->exec($sql);
            return "New record created successfully";
        } catch (PDOException $e) {
            return "not ADD USER";
        }
    }
}
?>
