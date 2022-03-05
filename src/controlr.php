<?php

session_start();
// require_once('./classes/check.php');
include_once('./classes/check.php');
include_once('./classes/DB.php');
include_once('./classes/User.php');
include_once('./classes/productclass.php');

// if($_POST['action'])
// print_r($_POST);
switch ($_GET['action']) {

    case 'getAllUser':
        $check = new Check();
        $user = $check->getUserForAdmin();
        echo json_encode($user);
        die();
        break;

    case 'actionForpermission':
        echo "hello";
        $u_id = $_GET['id'];
        $u_permison = $_GET['value'];
        $check = new Check();
        $user = $check->PermissionForUser($u_id, $u_permison);
        die();
        break;

    case 'addnewUser':
        $name = $_GET['uname'];
        $email = $_GET['email'];
        $pswrd = $_GET['pswrd'];
        $role = $_GET['role'];
        $permission = $_GET['permission'];
        $check = new Check();
        $check->addser($name, $email, $pswrd, $role, $permission);
        header("Location:./dashboard.php");
        die();
        break;

    case 'getAllProduct':
        $check = new Product();
        $user = $check->getAllProducts();
        echo json_encode($user);
        die();
        break;



    case 'addproduct':
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $category = $_GET['category'];
        $status = $_GET['status'];
        $check = new Product();
        $check->addProduct($id, $name, $price, $category, $status);
        header("Location:./products.php");
        die();
        break;

    case 'getproductfordisplay':
        $check = new Product();
        $user = $check->getAllProduct();
        echo json_encode($user);
        die();
        break;
}
// if($_GET['action']=='getAllUser'){
//     $check=new Check();
//     $user= $check->getUserForAdmin();
//     echo json_encode($user);
//     die();
//     // echo "hello";


//  }
if ($_POST['reg'] == 'regis') {
    header("Location:./ragistor.php");
} else
if (isset($_POST['username']) && isset($_POST['paswrd']) && isset($_POST['email'])) {
    $check = new Check();
    $uname = $_POST['username'];
    $upswrd = $_POST['paswrd'];
    $umail = $_POST['email'];

    $check->addser($uname, $upswrd, $umail);
    header("Location:./waitForAprovel.php");
} else
if ($_POST['paswrd'] != '' && $_POST['email'] != '') {
    // echo "in if";

    $check = new Check();
    $mail = $_POST['email'];
    $pswrd = $_POST['paswrd'];
    // echo $mail;
    // echo $pswrd;

    $valid = $check->checkValidfUser($mail, $pswrd);
    if ($valid == 0) {
        // echo "invalid user";
        header("Location:./warnig.php");
    } else {

        $role = $check->checkRoleOfUser($mail);
        //      echo $role;
        if ($role == 'admin') {
            //  echo "this is admin";
            $_SESSION['admin'] = 'login';
            header("Location:./dashboard.php");
        } else {
            //  echo "this is customer";
            header("Location:./customerdash.php");
        }
    }
} else {
    header("Location:login.php");
}


    


// if(isset($_POST['paswrd']) && isset($_POST['email'])){

//     $check = new Check();
//     $mail= $_POST['email'];
  
//      $role=$check->checkRoleOfUser($mail);
//      echo $role;
   
// }
// header('Location: login.php');
