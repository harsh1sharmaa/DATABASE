<?php

// namespace app;

// use PDO;

// use PDOException;

// require_once("../vendor/autoload.php");

// use app\DB;


include_once('DB.php');

class Order extends DB
{
    public int $id;
    public string $name;
    public string $email;
    public int $price;
    public string $quantity;



    public function __construct($id = 0, $name = "", $price = 0, $quantity = 0, $email = "")
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->price = $price;

        $this->quantity = $quantity;
    }
    

    public function PlaceOrder($order)
    {
        $id = $order->id;
        $name = $order->name;
        $email = $order->email;
        $price = $order->price;

        $quantity = $order->quantity;


        try {
            $conn = DB::getInstance();
            $sql = "INSERT INTO Orders ( product_id, product_name,product_price,quantity,email)
        VALUES ('$id', '$name', '$price','$quantity','$email')";
            // use exec() because no results are returned
            $conn->exec($sql);
            return 1;
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function getOrders($email)
    {


        $sql1 = "SELECT * FROM Orders WHERE email='$email'";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        //   $id1=$ans[0]['user_id'];
        // print_r($ans);
        return $ans;
    }

    public function getAllOrders()
    {


        $sql1 = "SELECT * FROM Orders";
        $conn = DB::getInstance();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ans = $stmt->fetchAll();
        //   echo"<pre>";
        //   $id1=$ans[0]['user_id'];
        // print_r($ans);
        return $ans;
    }

    public function aproveorder($id)
    {


        $conn = DB::getInstance();
        $sql = "UPDATE Orders SET status='aproved' WHERE order_id='$id'";


        $conn->exec($sql);
    }
}
