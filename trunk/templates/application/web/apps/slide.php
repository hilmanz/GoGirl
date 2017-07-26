
    <link rel="stylesheet" media="all" type="text/css" href="<?= base_url()?>/style/style-demo.css">

    <script src="<?= base_url()?>/script/jquery-1.11.1.js"></script>
    <script src="<?= base_url()?>/script/jquery.easing-1.3.js"></script>
    <script src="<?= base_url()?>/script/jquery.mousewheel-3.1.12.js"></script>
    <script src="<?= base_url()?>/script/jquery.jcarousellite.js"></script>
<hr>
<div id="jcl-demo">
<h3>Slider</h3>
 

    <div class="custom-container default">
        <a href="#" class="prev">&lsaquo;</a>
        <div class="carousel">
            <ul>
                <li><img src="<?= base_url()?>/image/1.jpg"></li>
                <li><img src="<?= base_url()?>/image/2.jpg"></li>
                <li><img src="<?= base_url()?>/image/3.jpg"></li>
                <li><img src="<?= base_url()?>/image/4.jpg"></li>
                <li><img src="<?= base_url()?>/image/5.jpg"></li>
                <li><img src="<?= base_url()?>/image/6.jpg"></li>
                <li><img src="<?= base_url()?>/image/7.jpg"></li>
                <li><img src="<?= base_url()?>/image/8.jpg"></li>
                <li><img src="<?= base_url()?>/image/9.jpg"></li>
                <li><img src="<?= base_url()?>/image/10.jpg"></li>
                <li><img src="<?= base_url()?>/image/11.jpg"></li>
            </ul>
        </div>
        <a href="#" class="next">&rsaquo;</a>
        <div class="clear"></div>
    </div>


    <script type="text/javascript">
        $(function() {
            $(".default .carousel").jCarouselLite({
                btnNext: ".default .next",
                btnPrev: ".default .prev"
            });
        });
    </script>

</div>
