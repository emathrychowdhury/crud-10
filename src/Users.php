<?php

namespace Premier;

use PDO;
class Users
{
    public $id = null;



    public $conn = null;


    public function __construct()
    {
        //Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function index(){


        $query = "SELECT * FROM `users`";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $user = $stmt->fetchAll();

        return $user;
    }

 

    public function store(){
      
        $user= $_POST['user_name'];
        $_password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        
        
        //echo $_title;
        
        //Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Insert Query
        
        $query = "INSERT INTO `users`( `user_name`, `password`, `full_name`, `email`, `phone_number`) VALUES (:user_name,:_password,:full_name ,:email ,:phone_number)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(':user_name', $user);
        $stmt->bindParam(':_password', $_password);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone);
        $result = $stmt->execute();
        //header("location:index.php");
      

    }

    public  function edit(){

        $_id = $_GET['id'];


        $query = "SELECT * FROM `users` WHERE `id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $user = $stmt->fetch();
        return $user;
    }

    public  function update(){
        $_id = $_POST['id'];
        $user= $_POST['user_name'];
        
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        
        
        //echo $_title;
        
        //Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Insert Query
        // UPDATE `users` SET `user_name` = 'Tanvir', `password` = '123456' WHERE `users`.`id` = 4;
        
        $query = "UPDATE `users` SET `user_name`= :user_name , `full_name`=:full_name, `email`=:email, `phone_number`=:phone_number  WHERE `users`.`id`=:id";
        
        $stmt = $conn->prepare($query);

           $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':user_name', $user);
        //$stmt->bindParam(':_password', $_password);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone);
        $result = $stmt->execute();
        header("location:index.php");
    }

    public function trash(){
        $_id = $_GET['id'];
        $_is_deleted = 1;


        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted  WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        header("location:index.php");
    }

    public function trash_index(){

        $query = "SELECT * FROM `banners` WHERE is_deleted = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchAll();
        return $banners;
    }

    public function restore(){
        $_id = $_GET['id'];
        $_is_deleted = 0;

        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted  WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        header("location:index.php");
    }

    public function delete(){
        $_id = $_GET['id'];

        $query = "DELETE FROM banners WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        header("location:trash_index.php");
    }
    public function sign_up(){

        $webroot = "http://localhost/crud-10/";
      
        $user= $_POST['user_name'];
        $_password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        
        
        //echo $_title;
        
        //Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Insert Query
        
        $query = "INSERT INTO `users`( `user_name`, `password`, `full_name`, `email`, `phone_number`) VALUES (:user_name,:_password,:full_name ,:email ,:phone_number)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(':user_name', $user);
        $stmt->bindParam(':_password', $_password);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone);
        $result = $stmt->execute();
        header('location:'.$webroot.'front/php/public/login.php');
      

    }
    public function login(){
        session_start();

        $webroot = "http://localhost/crud-10/";
      
        $user= $_POST['user_name'];
        $_password = $_POST['password'];
       
        
        
        //echo $_title;
        
        //Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Insert Query
        
        $query ="SELECT COUNT(*) AS total FROM `users` WHERE user_name LIKE :user_name AND password LIKE :password";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(':user_name', $user);
        $stmt->bindParam(':_password', $_password);
        
        $stmt->execute();
        $totalfound = $stmt->fetch();
        var_dump($totalfound);
        die();

        if($totalfound['total']>0){
            $_SESSION['is_authenticated']=true;
            header('location:'.$webroot.'admin/dashboard.php');
        }else{
            $_SESSION['is_authenticated']=false;
            header('location:'.$webroot.'404.php');
        }

        
      

    }


}