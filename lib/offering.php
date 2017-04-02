<?php
include 'connection.php';

class offering{

    private $connection;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();


    }
    public function courses(){
        $sql = "SELECT id,course_name FROM courses";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<li><a onclick="course_id('.$row["id"].')">' . $row["course_name"]. '</a></li>';
            }
        } else {
            echo '<li><a href=""> No Offer Courses</a></li>';
        }
        $this->connection->close();
    }

    public function departments(){
        $sql = "SELECT id,department_name FROM departmentes";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<li><a onclick="department_id('.$row["id"].')">' . $row["department_name"]. '</a></li>';

            }
        } else {
            echo '<li><a href=""> No Offer Department</a></li>';
        }
        $this->connection->close();
    }
}