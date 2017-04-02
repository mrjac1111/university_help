<?php
include 'connection.php';
class Event{

    private $connection;

    function __construct()
    {
        session_start();
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }


    function addEvent(){

        if(isset($_POST['add_title'])){
           echo $add_title= mysqli_real_escape_string($this->connection,$_POST['add_title']);

        }


        if(isset($_POST['add_description'])){
            echo $add_description= mysqli_real_escape_string($this->connection,$_POST['add_description']);

            
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

        echo $date=date('d');
        echo $month=date('M');
       $full_name= $_SESSION['full_name'];
        $id=$_SESSION['id'];


                $sql = "INSERT INTO events (user_id,added_by,title,image,description,day,month) VALUES ('$id','$full_name','$add_title','$file_name','$add_description','$date','$month')";
                if ($this->connection->query($sql) === TRUE) {
                    $eventAdd="Event Add Successfully";
                     header('Location: ../views/home.php');

                }else {
                    echo "Error: " . $sql . "<br>" . $this->connection->error;


                }
  $this->connection->close();


    }
}

$eventAdd= new Event();
$eventAdd->addEvent();

?>
