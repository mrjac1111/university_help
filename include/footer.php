<div class="footer-bottom">
    <div class="container text-center">
        <p>Website Created By <a href="#">Jawad Ahmad</a></p>
    </div>
</div>
<!-- main jQuery -->
<script src="../resources/event-them-resources/js/jquery-2.2.4.min.js"></script>
<!-- bootstrap -->
<script src="../resources/event-them-resources/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="../resources/event-them-resources/js/jquery.bxslider.min.js"></script>
<!-- appear js -->
<script src="../resources/event-them-resources/js/jquery.appear.js"></script>
<!-- count to -->
<script src="../resources/event-them-resources/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="../resources/event-them-resources/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="../resources/event-them-resources/js/validate.js"></script>
<!-- mixit up -->
<script src="../resources/event-them-resources/js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="../resources/event-them-resources/js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="../resources/event-them-resources/js/jquery.easing.min.js"></script>
<!-- isotope script -->
<script src="../resources/event-them-resources/js/isotope.pkgd.min.js"></script>
<!-- jQuery ui js -->
<script src="../resources/event-them-resources/js/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- revolution scripts -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../resources/event-them-resources/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- thm custom script -->
<script src="../resources/event-them-resources/js/custom.js"></script>

<!-- java script of image dawnload -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
<!--<script>
    $(document).ready(function(){


        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable

        $("#btn-Preview-Image").on('click', function () {
            html2canvas(element, {
                onrendered: function (canvas) {
                    $("#previewImage").append(canvas);
                    getCanvas = canvas;
                }
            });
        });

        $("#btn-Convert-Html2Image").on('click', function () {
            var imgageData = getCanvas.toDataURL("image/png");
            // Now browser starts downloading it instead of just showing it
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
        });

    });

</script>
-->
<script>
    function imageDawnload() {
        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable

        html2canvas(element, {
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
            }
        });

        $("#btn-Convert-Html2Image").on('click', function () {
            var imgageData = getCanvas.toDataURL("image/png");
            // Now browser starts downloading it instead of just showing it
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
        });



    }
</script>

</body>
</html>
