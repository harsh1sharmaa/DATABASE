<?php
// namespace app;

// use PDOException;

// require_once("../vendor/autoload.php");



include_once('DB.php');

class User extends DB
{
    // public int $user_id;
    public string $fname;
    public string $lname;
    public string $username;
    public string $password;
    public string $email;
    public string $role;
    public string $permission;

    public function __construct($fname, $lname, $username, $password, $email, $role, $permission)
    {
        // $this->user_id = $user_id;
        $this->username = $username;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
        $this->permission = $permission;
    }

    public function addUser($user)
    {
        $lname = $user->lname;
        $fname = $user->fname;
        $name = $user->username;
        $pswrd = $user->password;
        $email = $user->email;
        $role = $user->role;
        $permission = $user->permission;


        try {

            $conn = DB::getInstance();
            $sql = "INSERT INTO user (username, password, email,role,permission,f_name,l_name)
        VALUES ('$name', '$pswrd', '$email','$role','$permission','$fname','$lname')";
            // use exec() because no results are returned
            $conn->exec($sql);
            return;
        } catch (PDOException $e) {
            return;
        }
    }
}
