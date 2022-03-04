<?php

session_start();
// require_once('./classes/check.php');
include_once('./classes/check.php');
include_once('./classes/DB.php');
include_once('./classes/User.php');

// if($_POST['action'])
// print_r($_POST);
if($_GET['action']=='getAllUser'){
    $check=new Check();
    $user= $check->getUserForAdmin();
    echo json_encode($user);
    die();
    // echo "hello";

    
 }
if($_POST['reg']=='regis'){
    header("Location:./ragistor.php");

}else
if(isset($_POST['username']) && isset($_POST['paswrd'])&& isset($_POST['email'])){
  $check=new Check();
  $uname=$_POST['username'];
  $upswrd=$_POST['paswrd'];
  $umail=$_POST['email'];
  
  echo $check->addser($uname,$upswrd,$umail);

}else
if($_POST['paswrd']!='' && $_POST['email']!=''){
    // echo "in if";

    $check = new Check();
    $mail= $_POST['email'];
    $pswrd= $_POST['paswrd'];
    // echo $mail;
    // echo $pswrd;
  
     $valid=$check->checkValidfUser($mail,$pswrd);
     if($valid==0){
         echo "invalid user";
     }else{

        $role=$check->checkRoleOfUser($mail);
//      echo $role;
         if($role=='admin'){
            //  echo "this is admin";
            $_SESSION['admin']='login';
             header("Location:./dashboard.php");

         }else{
            //  echo "this is customer";
            header("Location:./customerdash.php");
         }


     }
}else{
    header("Location:login.php");

}


    


// if(isset($_POST['paswrd']) && isset($_POST['email'])){

//     $check = new Check();
//     $mail= $_POST['email'];
  
//      $role=$check->checkRoleOfUser($mail);
//      echo $role;
   
// }
// header('Location: login.php');
?>