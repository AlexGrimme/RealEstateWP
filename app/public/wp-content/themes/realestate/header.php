<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-4">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
                ?>
<!--                <a href="#"><img src="assets/img/logo.png" class="hd_logo" alt="site_logo"></a>-->
            </div>
            <div class="col-8">
                <nav>
                    <ul class="header_menu">
                        <?php wp_nav_menu('Primary Menu'); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>