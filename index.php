<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>easyread | online reading books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="assets/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <!-- <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    titles
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    body
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    //online-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!--header-->
        <?php include ('include/header.php'); ?>
        <!--//header-->


        <!--banner-->
        <?php include('include/banner.php');?>
        <!--//banner-->


        <!--book-->
        <?php include('include/book.php');?>
        <!--//book-->


        <!--about-->
        <?php include('include/about.php');?>
        <!--//about-->

        <!-- about bottom -->
        <?php include('include/aboutbottom.php');?>
        <!-- //about bottom -->




        <!-- footer-->
        <?php include ('include/footer.php');?>
        <!--//footer-->






































 <!-- js -->
    <script src="assets/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="assets/js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- Scrolling Nav JavaScript -->
    <script src="assets/js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- start-smooth-scrolling -->
    <script src="assets/js/move-top.js"></script>
    <script src="assets/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="assets/js/numscroller-1.0.js"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>