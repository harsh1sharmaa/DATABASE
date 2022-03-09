<?php
// include ("autoload.php");

session_start();
require_once('./classes/check.php');
include_once('./classes/check.php');
include_once('./classes/DB.php');
include_once('./classes/User.php');
include_once('./classes/order.php');
include_once('./classes/productclass.php');


// echo "<pre>";
// print_r($_SESSION);
// // echo "hello";
// die();
switch ($_REQUEST['action']) {

    case 'getAllUser':
        $check = new Check();
        $user = $check->getUserForAdmin();
        echo json_encode($user);
        die();
        break;

    case 'actionForpermission':
        // echo "hello";
        $u_id = $_GET['id'];
        $u_permison = $_GET['value'];
        $check = new Check();
        $user = $check->PermissionForUser($u_id, $u_permison);
        die();
        break;

    case 'changestatus':
        // echo "hello";
        $id = $_GET['id'];
        // $u_permison = $_GET['value'];
        $order = new Order();
        $user = $order->aproveorder($id);
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

    case 'getallOrder':
        $check = new Order();
        $user = $check->getAllOrders();
        echo json_encode($user);
        die();
        break;

    case 'getDetailsbyId':
        $check = new Product();
        $id = $_POST['id'];
        $user = $check->getDetailsById($id);
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
    case 'getproductbyId':
        $check = new Product();
        $category = $_GET['category'];
        $user = $check->getProductByCategory($category);
        echo json_encode($user);
        die();
        break;

    case 'getOrders':
        $check = new Order();
        $email = $_SESSION['user'];
        $order = $check->getOrders($email);
        echo json_encode($order);
        exit();
        die();
        break;
    case 'addToCart':
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $quantity = $_GET['quantity'];
        $product = array("id" => $id, "name" => $name, "price" => $price, "quantity" => $quantity);
        if (!isset($_SESSION['AddToCart'])) {
            $_SESSION['AddToCart'] = array();
        }

        array_push($_SESSION['AddToCart'], $product);
        die();
        break;

    case 'getCart':
        echo json_encode($_SESSION['AddToCart']);
        exit();

        break;
    case 'updateQuantity':
        $id = $_GET['id'];
        $val = $_GET['qnty'];
        updateQuentity($id, $val);
        echo json_encode($_SESSION['AddToCart']);
        die();
        exit();

        break;
    case 'removeFromCart':
        $id = $_GET['id'];
        removeFromCart($id);
        echo json_encode($_SESSION['AddToCart']);
        die();
        exit();

        break;

    case 'checkout':

        if (isset($_SESSION['user'])) {
            //order placed
            // echo "hello";
            $email = $_SESSION['user'];
            $cnfrm = placeOrder($email);
            if ($cnfrm == 1) {

                unset($_SESSION['AddToCart']);
                header("Location:./orderPlaced.php");
            } else {

                echo "order Not Placed";
                die();
            }
        } else {


            // header("Location:./login.php");
            header("Location:./checkout.php");
        }
        die();
        break;

    case 'logout':
        unset($_SESSION['user']);
        header("Location:./login.php");
        die();
        break;
    case 'placeOrder':
        $username = $_GET['username'];
        $email = $_GET['email'];
        $pswrd = $_GET['firstName'];
        $role = $_GET['lastName'];
        $permission = $_GET['permission'];
        $check = new Check();
        // echo "order ";
        // die();
        $check->checkLoginOrNot($email);
        // echo $check;
        if ($check == 1) {
            //login
            //place Order in Tabl
            $cnfrm = placeOrder($email);
            if ($cnfrm == 1) {

                unset($_SESSION['AddToCart']);
                header("Location:./orderPlaced.php");
            } else if ($check != 1) {

                echo "order Not Placed";
                die();
            } else {

                header("Location:./login.php");
            }
        } else {
            //not valid user
            // echo "order Placed";
            // die();
            header("Location:./warnig.php");
        }

        die();
        break;
}



if ($_POST['reg'] == 'regis') {
    header("Location:./ragistor.php");
} elseif (isset($_POST['username']) && isset($_POST['paswrd']) && isset($_POST['email'])) {
    $check = new Check();
    $uname = $_POST['username'];
    $upswrd = $_POST['paswrd'];
    $umail = $_POST['email'];

    $check->addser($uname, $upswrd, $umail);
    header("Location:./waitForAprovel.php");
} else if ($_POST['paswrd'] != '' && $_POST['email'] != '') {
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

            // if (isset($_SESSION['user'])) {

            //     header("Location:./checkout.php");
            // } else {

            //  echo "this is customer";
            $_SESSION['user'] = $mail;
            // array_push($_SESSION['users'],$mail);
            header("Location:./customerdash.php");
        }
    }
} else {
    header("Location:login.php");
}

function updateQuentity($id, $qnty)
{

    foreach ($_SESSION['AddToCart'] as $key => $val) {

        if ($val['id'] == $id) {
            $_SESSION["AddToCart"][$key]['quantity'] = $qnty;
            // echo $val
            break;
        }
    }
}
function removeFromCart($id)
{

    foreach ($_SESSION['AddToCart'] as $key => $val) {

        if ($val['id'] == $id) {
            //    $_SESSION["AddToCart"][$key]['quantity']=$qnty;
            //     // echo $val
            //     break;
            array_splice($_SESSION['AddToCart'], $key, 1);
            break;
        }
    }
}

function placeOrder($email)
{
    $ans = 1;


    foreach ($_SESSION['AddToCart'] as $key => $val) {

        $id = $val['id'];
        $name = $val['name'];
        $price = $val['price'];
        $quantity = $val['quantity'];
        $order = new Order($id, $name, $price, $quantity, $email);
        $ans *= $order->PlaceOrder($order);
    }
    return $ans;
}
