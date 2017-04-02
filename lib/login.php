<?php
include("connection.php");
class login
{

    private $connection;

    function __construct()
    {
        session_start();
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }
    function userLogin(){

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form

            echo $myuserid = mysqli_real_escape_string($this->connection,$_POST['user_id']);
           echo $mypassword = mysqli_real_escape_string($this->connection,$_POST['password']);


            $sql = "SELECT id,roll_id,department_id,course_id,lecturer_id,student_id,full_name,created FROM user WHERE (student_id = '$myuserid' OR lecturer_id = '$myuserid') AND password = '$mypassword'";
            $result = mysqli_query($this->connection,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo $id = $row['id'];
            echo $roll_id = $row['roll_id'];
            echo $department_id = $row['department_id'];
            echo $lecturer_id= $row['lecturer_id'];
            echo $student_id= $row['student_id'];
            echo $full_name= $row['full_name'];
            echo $created= $row['created'];

            $count = mysqli_num_rows($result);

            // If result matched $myusername and $mypassword, table row must be 1 row

            if($count == 1) {
                $_SESSION['id'] = $id;
                $_SESSION['roll_id'] = $roll_id;
                $_SESSION['department_id'] = $department_id;
                $_SESSION['lecturer_id'] = $lecturer_id;
                $_SESSION['student_id'] = $student_id;
                $_SESSION['full_name'] = $full_name;
                $_SESSION['created'] = $created;
                $_SESSION['myuserid'] = $myuserid;

                header("location: ../views/home.php");
            }else {

                echo $error = "Your User Id or Password is invalid";

                header("location: ../views/signin.php?login_err=".$error);

            }
        }

    }
}

$new_user_login=new login();
$new_user_login->userLogin();


?>