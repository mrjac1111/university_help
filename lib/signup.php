<?php

include 'connection.php';
class signUP{
    private $connection;
    private $signUpSuccessfully;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }


    function insert( $roll_id,$department_id,$course_id,$lecturer_id,$student_id,$full_name,$password){
        /*if(isset($_GET['c_id'])){
            $course_id=$_GET['c_id'];
            $department_id="NULL";
        }

        if(isset($_GET['d_id'])){
            $department_id=$_GET['d_id'];
            $course_id="NULL";
        }
        */$created=date('d-M-Y');

        if(!isset($_SESSION["SignUpSuccessfully"])){

            // check user exist or not
            if($roll_id==1){
                $sql = "SELECT id FROM user WHERE student_id = '$student_id' OR lecturer_id = '$student_id' ";
            }else{
                $sql = "SELECT id FROM user WHERE student_id = '$lecturer_id' OR lecturer_id = '$lecturer_id' ";

            }
            $result = mysqli_query($this->connection,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            $count = mysqli_num_rows($result);

            // If result matched $myusername and $mypassword, table row must be 1 row

            if($count == 1) {
                echo $error = " User id already exist";
                header("location: ../views/signin.php?login_err=".$error);
            }else {

                //user sign Up

                $sql = "INSERT INTO user (roll_id,department_id,course_id,lecturer_id,student_id,full_name,password,created) VALUES ('$roll_id','$department_id','$course_id','$lecturer_id','$student_id','$full_name','$password','$created')";
                if ($this->connection->query($sql) === TRUE) {
                    $this->signUpSuccessfully="sign Up Successfully";
                    // $_SESSION["SignUpSuccessfully"]=$this->signUpSuccessfully;
                    header('Location: ../index.php');

                }else {
                    echo "Error: " . $sql . "<br>" . $this->connection->error;


                }

            }






        }else
        {
           // $_SESSION["SignUpSuccessfully"]="You Already Sign Up";
          // header('Location: ../index.php');
        }

        $this->connection->close();

    }

}

if (isset($_POST['roll_id'])){
    echo $roll_id = $_POST['roll_id'];

}
if (isset($_POST['lecturer_id'])){
    echo $lecturer_id=$_POST['lecturer_id'];
    $student_id="NULL";
}

if (isset($_POST['student_id'])){
    echo $student_id=$_POST['student_id'];
    $lecturer_id="NULL";
}
if (isset($_POST['full_name'])){
    echo $full_name=$_POST['full_name'];

}
if (isset($_POST['password'])){
    echo $password=$_POST['password'];

}
if (isset($_POST['department_id'])){
    echo $department_id=$_POST['department_id'];
     $course_id="NULL";


}
if (isset($_POST['course_id'])){
    echo $course_id=$_POST['course_id'];
     $department_id="NULL";


}
//$student_id=$_POST['student_id'];

$signUp= new signUP();
$signUp->insert($roll_id,$department_id,$course_id,$lecturer_id ,$student_id,$full_name ,$password );


?>