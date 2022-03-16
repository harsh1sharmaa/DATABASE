<?php

// namespace app;

// use PDO;

// require_once("../vendor/autoload.php");


require_once('DB.php');
require_once('User.php');





// $sql = "SELECT permission FROM user WHERE email='harshharma'";
// // $sql=`SELECT role FROM user WHERE email="harsh@sharma"`;
// $conn = DB::getInstance();

// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
// $ans = $stmt->fetchAll();
// echo "<pre>";

// echo $ans[0]['permission'];

// die();


class Check extends User
{


    public function __construct()
    {
    }

    public function addser($fname, $lname, $name, $pswrd, $mail, $role = "customer", $permission = "false")
    {

        $user = new User($fname, $lname, $name, $pswrd, $mail, $role, $permission);
        return  $user->addUser($user);
    }

    public function checkRoleOfUser($email)
    {



        $sql = "SELECT role FROM user WHERE email='$email'";
        // $sql=`SELECT role FROM user WHERE email="harsh@sharma"`;
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        return $ans[0]['role'];
    }
    public function checkValidfUser($email, $pswrd)
    {



        $sql1 = "SELECT user_id FROM user WHERE email='$email'";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        $id1 = $ans[0]['user_id'];
        //   echo $id1;
        $sql2 = "SELECT user_id FROM user WHERE password='$pswrd'";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql2);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        $id2 = $ans[0]['user_id'];
        //////////********************* */
        $sql1 = "SELECT permission FROM user WHERE email='$email'";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        $permission = $ans[0]['permission'];

        if (($id1 == $id2) && ($permission == 'true')) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getUserForAdmin()
    {


        $sql1 = "SELECT user_id,username,email,role,permission FROM user";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        //   $id1=$ans[0]['user_id'];
        // print_r($ans);
        return $ans;
        // foreach($ans as $k=>$val){
        //     echo $val['user_id'];
        // }

    }
    /**
     * this function change the permision of user
     *
     * @param [type] $id
     * @param [type] $permison
     * @return void
     */
    public function PermissionForUser($id, $permison)
    {


        $conn = DB::getInstance();
        $sql = "UPDATE user SET permission='$permison' WHERE user_id='$id'";


        $conn->exec($sql);
    }


    public function checkLoginOrNot($email)
    {



        $sql = "SELECT permission FROM user WHERE email='$email'";
        // $sql=`SELECT role FROM user WHERE email="harsh@sharma"`;
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";

        if ($ans[0]['permission'] == 'true') {
            return 1;
        } else {
            return 0;
        }
    }

    // function AddUserByAdmin($name,$mail,$pswrd,$role,$permison){

    // }
}
