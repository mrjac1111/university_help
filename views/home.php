<?php
include '../include/header.php';
include '../lib/read-events.php';

?>
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Events</h2>
                <ul class="breadcumb">
                    <li><a href="home.php">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-home sec-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

<?php
$read= new read_events();
$read->events();
?>



            </div>
            </div>
            </div>

</section>

<?php include '../include/footer.php'?>