<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no"/>
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
    <title>FLIPFLOP ADMIN - DASHBOARD</title>
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
                initSideMenu("#dashboard");
            }
        )
    </script>
</head>
<body class="sidebar_main_open sidebar_main_swipe">
    <?php include('components/header.php'); ?>
    <?php include('components/sidebar.php'); ?>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Dashboard</h3>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            Veritatis debitis totam quos et nisi atque nobis ipsa tenetur et quis voluptatem maxime et enim dignissimos aut blanditiis deserunt nemo ratione doloribus itaque doloremque quia molestias aut excepturi omnis provident tenetur voluptatem aperiam officiis voluptatem unde nihil in incidunt aut quia et necessitatibus qui et aliquam voluptate cum alias minus velit vel cum sint doloremque exercitationem quos saepe repellat omnis consequatur consequatur dolorem non eveniet adipisci autem quam aut rerum et tenetur officiis earum nisi et aperiam et velit aut consectetur similique nesciunt voluptatem et possimus placeat in odio laboriosam nesciunt necessitatibus dolor neque unde et inventore et eos vitae quo officiis nesciunt rerum et placeat et vel laborum nostrum iure iure ut praesentium similique sit recusandae magnam quia veniam animi dolor qui earum qui sit aut sed rerum omnis est incidunt accusamus laboriosam dolor voluptate totam consequuntur amet praesentium quod sed molestiae rerum assumenda officiis ab dicta eius quia nam quae excepturi aliquid modi quia molestias delectus sunt non reiciendis qui rerum et dignissimos tempore ducimus et assumenda laudantium quas sapiente voluptas est nam temporibus voluptatem numquam maxime voluptatibus est in doloremque qui omnis ut eveniet doloribus impedit harum aliquid velit nulla expedita totam et nostrum suscipit id ut reiciendis consequatur repudiandae magnam qui corrupti blanditiis est dolore explicabo corrupti minima et molestiae incidunt eius vel ducimus unde eligendi nisi cumque sit atque et harum aperiam optio velit beatae officia eligendi enim consequatur corporis rem velit omnis aut id commodi rerum aliquid voluptas vitae porro et eius ut rerum officia harum voluptatum in accusamus provident possimus repellendus natus similique explicabo nostrum non sed voluptas velit facere aliquam voluptatem consequatur occaecati officia dolorem dolor.                        
                        </div>
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
</body>
</html>