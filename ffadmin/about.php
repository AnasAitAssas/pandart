<?php include('components/connexion.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no"/>
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
    <title>FLIPFLOP ADMIN - ABOUT</title>
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">
    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">
    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/side_menu_init.js"></script>
    <script>
        $( document ).ready(
            function()
            {
                initSideMenu("#about");
            }
        )
    </script>
</head>
<body class="sidebar_main_open sidebar_main_swipe">
    <?php include('components/header.php'); ?>
    <?php include('components/sidebar.php'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">About Us</h3>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid uk-width-1-1" data-uk-grid-margin>
                        <form method="post" action="server/update_about.php" style="width:100%">
                            <div class="uk-width-1-1">
                                <textarea name="aboutText" id="aboutText">
                                    <?php
                                        $response = $bdd->query('Select * from about where aboutID=1');
                                        $donnees = $response->fetch(); 
                                        echo $donnees['aboutText'];
                                    ?>
                                </textarea>                
                            </div>
                            <div class="uk-width-1-1" >
                                <button class="md-btn md-btn-primary uk-margin-top" style="float:right;" type="submit" data-uk-grid-margin>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>
    <!-- ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('aboutText');
    </script>
</body>
</html>