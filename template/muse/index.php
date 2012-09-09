<?php
if (isset($_GET['Wojewodztwo'])) {
    if (!intval($_GET['Wojewodztwo'])) {
        header('Location: http://przedszkolne.info');
    }
}
if (isset($_GET['gm'])) {
    if (!intval($_GET['gm'])) {
        header('Location: http://przedszkolne.info');
    }
}
if (isset($_GET['pow'])) {
    if (!intval($_GET['pow'])) {
        header('Location: http://przedszkolne.info');
    }
}
if (isset($_GET['publicznosc'])) {
    if (!intval($_GET['publicznosc'])) {
        header('Location: http://przedszkolne.info');
    }
}
require_once 'kolory.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="apple-touch-con" href="#" />
        <? metaTagi::pokazTagi(); ?>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <!-- The Columnal Grid and mobile stylesheet -->
        <link rel="stylesheet" href="./template/muse/assets/styles/columnal/columnal.css" type="text/css" media="screen" />

        <!-- Fixes for IE -->

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="assets/styles/columnal/ie.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="assets/styles/ie8.css" type="text/css" media="screen" />
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"  type="text/javascript"></script>
            <script type="text/javascript" src="assets/scripts/flot/excanvas.min.js"  type="text/javascript"></script>
        <![endif]-->        


        <!-- Now that all the grids are loaded, we can move on to the actual styles. --> 
        <link rel="stylesheet" href="./template/muse/assets/scripts/jqueryui/jqueryui.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./template/muse/assets/styles/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./template/muse/assets/styles/global.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./template/muse/assets/styles/config.css" type="text/css" media="screen" />

        <!-- Use CDN on production server -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"  type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"  type="text/javascript"></script>
        <!-- <script src="assets/scripts/jquery-1.6.4.min.js"  type="text/javascript"></script> -->
        <!-- <script src="assets/scripts/jqueryui/jquery-ui-1.8.16.custom.min.js"  type="text/javascript"></script> -->

        <!-- Menu -->
        <link rel="stylesheet" href="./template/muse/assets/scripts/superfish/superfish.css" type="text/css" media="screen" />
        <script src="./template/muse/assets/scripts/superfish/superfish.js"  type="text/javascript"></script>

        <!-- Adds HTML5 placeholder element to those lesser browsers -->
        <script src="./template/muse/assets/scripts/jquery.placeholder.1.2.min.shrink.js"  type="text/javascript"></script>

        <!-- Custom Tooltips -->
        <script src="./template/muse/assets/scripts/twipsy.js"  type="text/javascript"></script>

        <!-- All the js used in the demo -->
        <script src="./template/muse/assets/scripts/demo.js"  type="text/javascript"></script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28978632-2']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>
    <body>
        <div class="description">
            <p><strong><? echo metaTagi::pokazOpis(); ?></strong></p>
        </div>
        <div id="wrap">
            <div id="main">
                <?php
                require 'template/muse/header.html';
                require 'template/muse/top_navigation.html';
                require 'template/muse/top_title.html';
                require 'template/muse/body.html';
                ?>


                <!--container -->

            </div>
        </div>
        <?php
        require 'template/muse/footer.html';
        ?>
    </body>
</html>