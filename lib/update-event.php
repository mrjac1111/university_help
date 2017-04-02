<?php
include 'connection.php';
class updateEvent{

    private
    $connection;

    function __construct()
    {
        session_start();
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }
    function update(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }

        if(isset($_POST['update_title'])){
             $update_title= mysqli_real_escape_string($this->connection,$_POST['update_title']);

        }


        if(isset($_POST['update_description'])){
             $update_description= mysqli_real_escape_string($this->connection,$_POST['update_description']);


        }
        //Image Start
        if(isset($_FILES['image'])){
            //echo "test";
            $errors= array();
            $time=strtotime("now");
            $old_file_name = $_FILES['image']['name'];
            $file_name=$time.$old_file_name;
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            $expensions= array("jpeg","jpg","png");

            if(in_array($file_ext,$expensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152){
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"../resources/event_images/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }

        //Image End

        $sql = "UPDATE events SET title='$update_title',image='$file_name',description='$update_description' WHERE id=$id";

        if ($this->connection->query($sql) === TRUE) {
            header('Location: ../views/home.php');

        } else {
            echo "Error updating record: " . $this->connection->error;
            header('Location: ../views/home.php');

        }

        $this->connection->close();

    }
}
$eventUpdate=new updateEvent();
$eventUpdate->update();
?>