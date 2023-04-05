<?php

namespace Premier;

use PDO;
class Banners
{
    public $id = null;
    public $title = null;
    public $details = null;


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


        $query = "SELECT * FROM `banners` WHERE is_deleted = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchAll();

        return $banners;
    }

    public function getActiveBanners(){

        $_startFrom = 0;
        $_total = 3;
        $query = "SELECT * FROM `banners` WHERE is_active = 1 LIMIT $_startFrom, $_total";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchAll();

        return $banners;
    }

    public function store(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/crud-10/";

        //Working with Picture

        $file_name = "IMG_".time(). "_".$_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot."uploads/".$file_name;
        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;
        }
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }



        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_details = $_POST['details'];
        $_created_at =  date("Y-m-d H:i:s", time());



        //Insert Query

        $query = "INSERT INTO `banners` (`title`, `details`, `picture`, `is_active`, `created_at`) VALUES (:title, :details,  :picture, :is_active, :created_at)";

        $stmt = $this->conn->prepare($query);


        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':details', $_details);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':created_at', $_created_at);


        $result = $stmt->execute();

        header("location:index.php");

    }

    public  function show(){
        $_id = $_GET['id'];


        $query = "SELECT * FROM `banners` WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();
        return $banner;
    }

    public  function edit(){

        $_id = $_GET['id'];


        $query = "SELECT * FROM `banners` WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();
        return $banner;
    }

    public  function update(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/crud-10/";

        //Working with Picture

        if($_FILES['picture']['name'] != ""){
            $file_name = "IMG_".time(). "_".$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot."uploads/".$file_name;
            $is_file_moved = move_uploaded_file($target, $destination);

            if($is_file_moved){
                $_picture = $file_name;
            }else{
                $_picture = null;
            }
        }else{
            $_picture = $_POST['old_picture'];
        }

        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }


        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_details = $_POST['details'];
        $_modified_at =  date("Y-m-d H:i:s", time());



        //Insert Query

        $query = "UPDATE `banners` SET `title` = :title, `details` = :details, `picture` = :picture, `is_active` = :is_active, `modified_at` = :modified_at  WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':details', $_details);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':modified_at', $_modified_at);


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



}