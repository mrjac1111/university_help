


<?php
if(isset($_POST["email"])){
   $from= $_POST["email"];
}
if(isset($_POST["title"])){
   $title= $_POST["title"];
}
if(isset($_POST["message"])){
   $message= $_POST["message"];
}



$to = "mrjac1111@gmail.com";
$subject = $title;
$txt = $message;
$headers = "From: ".$message." ". "\r\n" .
    "CC: mrjac1111@gmail.com";

mail($to,$subject,$txt,$headers);

header('Location:index.php');

?>