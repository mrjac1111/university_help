<?php
include("connection.php");
class eventDetails
{

    private $connection;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }
    function details(){

                if(isset($_GET['id'])){
                   $id=$_GET['id'];
                }
            $sql = "SELECT user_id,added_by,title,image,description,day,month FROM events WHERE  id= '$id'";
            $result = mysqli_query($this->connection,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            $count = mysqli_num_rows($result);


            if($count == 1) {
                echo '
                <div class="single-blog-post">
                    
                    <div class="col-md-12">
                        <img id="#img-box-detail" src="../resources/event_images/'.$row["image"].'" alt="">
                    </div>
                    <div class="content-box col-md-12">
                        <div class="date-box">
                            <div class="inner">
                                <div class="date">
                                    <b>'.$row["day"].'</b> '.$row["month"].'
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#"><h3>'.$row["title"].'</h3></a>
                            <p id="event-details"> '.$row["description"].' </p>
                            <div class="bottom-box clearfix">
                                <span class="pull-left">By  <a href="#">'.$row["added_by"].'</a></span>
                             </div>
                        </div>
                    </div>
                </div>
                ';

            }else {

                echo $error = "Your Events details are not Found";

                header("location: ../index.php?login_err=".$error);

            }
        }

    function updateDetailis(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        $sql = "SELECT user_id,added_by,title,image,description,day,month FROM events WHERE  id= '$id'";
        $result = mysqli_query($this->connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);


        if($count == 1) {
            echo '
                            <a href="update-event.php?id='.$id.'&&title='.$row["title"].'&&description='.$row["description"].'&&image='.$row["image"].'" class="btn btn-danger"> Update Event</a>

                ';

        }else {

            echo $error = "Your Events details are not Found";

            header("location: ../index.php?login_err=".$error);

        }


    }

    }



?>