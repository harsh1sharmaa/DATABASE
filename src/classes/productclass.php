<?php
include_once('DB.php');
  class Product extends DB
  {

    public function __construct()
    {
        
    }
    

    /**
     * 
     * this function return all products in database
     *
     * @return void
     */
    public function getAllProducts(){


      $sql1 = "SELECT * FROM Products";
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

  

    public function addProduct($id,$name,$price,$category,$status){
      try {

        $conn = DB::getInstance();
        $sql = "INSERT INTO Products (product_id, product_name, product_price,category,status)
    VALUES ('$id', '$name', '$price','$category','$status')";
        // use exec() because no results are returned
        $conn->exec($sql);
        return ;
    } catch (PDOException $e) {
        return ;
    }


    }

    public function getAllProduct(){


      $sql1 = "SELECT * FROM storeproduct";
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

    public function getDetailsById($id){


      $sql1 = "SELECT * FROM storeproduct WHERE Id='$id'" ;
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
    public function getProductByCategory($category){


      $sql1 = "SELECT * FROM storeproduct WHERE category='$category'" ;
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



  



  }



?>