<?php include '../include/header.php';
        include '../lib/event-details.php';
?>
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Event Details</h2>
                <ul class="breadcumb">
                    <li><a href="home.php">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>Event Details</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-home sec-padding blog-page blog-details" >
    <div class="container" >
        <div class="row" id="html-content-holder">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="col-md-3 pull-right">

                </div>
                    <?php
                    $eventDetails= new eventDetails();
                    $eventDetails->details();
                    ?>


                </div>
            </div>
        <div class="col-md-3 pull-right" >
            <?php $eventDetails->updateDetailis();
            ?>
            <!-- <a href="update-event.php" class="btn btn-danger"> Update Event</a>
            --><a id="btn-Convert-Html2Image" class=" btn btn-success pull-right" href="#">Download</a>

        </div>

    </div>



</section>

<?php include '../include/footer.php'?>