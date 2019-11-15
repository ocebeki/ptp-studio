<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=”description” content=”Professional photography studio” />

    <link rel="shortcut icon" type="image/png" href="assets/images/photo-camera.png" />

    <title>PTPSTUDIO</title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href='<?php echo home_url(); ?>' class="header__logo-item">
                        PTP STUDIO
                    </a>
                </div>
                <div class="header__toggle-btn-wrapper">
                    <div class="header__toggle-btn">
                        <div class="header__toggle-btn-line"></div>
                        <div class="header__toggle-btn-line"></div>
                        <div class="header__toggle-btn-line"></div>
                    </div>
                </div>
                <?php get_template_part('components/languages'); ?>
            </div>
        </div>
        <div class="container">
            <nav class="header__nav-wrapper">
                <?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' => false,
						'menu_class' => 'header__list'
						) );	
					?>
            </nav>
        </div>
        </div>
        </div>
    </header>




    <!-- <ul class="header__list">
                    <li class="header__list-item"><a href="/">STRONA GŁÓWNA</a></li>
                    <li class="header__list-item"><a href="/">PORTFOLIO</a></li>
                    <li class="header__list-item"><a href="/">KILKA SŁÓW O MNIE</a></li>
                    <li class="header__list-item"><a href="/">KONTACT</a></li>
                </ul> -->