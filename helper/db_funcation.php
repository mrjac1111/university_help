<?php
include '../lib/connection.php';
session_start();
class db_funcation
{
    function __construct()
    {
        // connect database
        $db= new Connection();
        $db->getConnection();

    }


}
$connect_database = new db_funcation();
