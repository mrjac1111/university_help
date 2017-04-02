<?php include '../include/header.php'?>
    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>Add Event</h2>
                    <ul class="breadcumb">
                        <li><a href="home.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><span>Add Event</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-content sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-sm-40">
                    <h2>Add Event</h2>
                    <form action="../lib/update-event.php?id=<?php echo $_GET["id"]?>" method="post" class="contact-form row" enctype="multipart/form-data" >
                        <div class="col-md-6">
                            <input type="text" name="update_title" value="<?php  if(isset($_GET["title"])){echo $_GET["title"];}?>" required placeholder="Update Title">
                            <input type="file" value="<?php  if(isset($_GET["image"])){echo $_GET["image"];}?>" required name="image">
                        </div>
                        <div class="col-md-6">
                            <textarea name="update_description" required placeholder="Update Description" cols="30" rows="10"><?php  if(isset($_GET["description"])){echo $_GET["description"];}?></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
    </section>
<?php include '../include/footer.php'?>