<!--  footer -->
<footr>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Address</h3>
                        <i><img src="<?= base_url('icon/3.png') ?>">Jl.Sekar Sari IX, Kesiman, Denpasar - Bali</i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                            <li><img src="<?= base_url('icon/fb.png') ?>" alt="icon" /></li>
                            <li><img src="<?= base_url('icon/tw.png') ?>" alt="icon" /></li>
                            <li><img src="<?= base_url('icon/lin (2).png') ?>" alt="icon" /></li>
                            <li><img src="<?= base_url('icon/instagram.png') ?>" alt="icon" /></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                    <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright 2021 All Right Reserved By Global Fruit Indo</p>
        </div>
    </div>
</footr>
<!-- end footer -->
<!-- Javascript files-->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/popper.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('js/jquery-3.0.0.min.js') ?>"></script>
<script src="<?= base_url('js/plugin.js') ?>"></script>
<!-- sidebar -->
<script src="<?= base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<script src="<?= base_url('js/custom.js') ?>"></script>
<script src="<?= base_url('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        barChart();
        $(window).resize(function() {
            barChart();
        });

        function barChart() {
            $('.bar-chart').find('.progress').each(function() {
                var itemProgress = $(this),
                    itemProgressWidth = $(this).parent().width() * ($(this).data('persen') / 100);
                itemProgress.css('width', itemProgressWidth);
            });
        }
    });
</script>
<a href="https://web.whatsapp.com/">
    <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c543.png" class="wabutton" alt="WhatsApp-Button">
</a>
</body>

</html>