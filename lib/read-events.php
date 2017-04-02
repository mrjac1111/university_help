<?php
include 'connection.php';

class read_events{

    private $connection;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }
    public function events(){
        $sql = "SELECT id,user_id,added_by,title,image,description,day,month FROM events";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="../resources/event_images/'.$row["image"].'" alt="">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="event-details.php?id='.$row["id"].'"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner">
                                    <div class="date">
                                        <b>'.$row["day"].'</b> '.$row["month"].'
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-details.html"><h3>'.$row["title"].'</h3></a>
                                <p>'.$row["description"].'</p>
                                <span>By <a href="blog-details.html">'.$row["added_by"].'</a></span>
                            </div>
                        </div>
                    </div>
                </div>
';
              /*  echo '<li><a onclick="course_id('.$row["id"].')">' . $row["course_name"]. '</a></li>';*/
            }
        } else {
            echo '<li><a href=""> No Offer Courses</a></li>';
        }
        $this->connection->close();
    }

}

