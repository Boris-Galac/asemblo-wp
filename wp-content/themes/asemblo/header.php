<html lang="en" <?php language_attributes();  ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title>
    <meta name="description" content="Lorem ipsum dolor sit amet." />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="business, technology, it, asemblo solutions" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo site_url() ?> " class="header__logo"><img
                src="/wp-content/themes/asemblo/src/assets/icons/logo.svg" alt="asemblo solutions logo" /></a>
        <nav class="nav" id="nav" aria-expanded="false">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo site_url() ?> " class="nav__link nav__link--home"><img
                            src="/wp-content/themes/asemblo/src/assets/icons/header-home-icon.svg" alt="home" />
                        Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">About Asemblo</a>
                </li>
                <li class="nav__item">
                    <a href="#offer" class="nav__link">Services</a>
                </li>
                <li class="nav__item">
                    <a href="#partnership" class="nav__link">Partnership benefits</a>
                </li>
                <li class="nav__item">
                    <a href="#tech" class="nav__link">Technologies we use</a>
                </li>
            </ul>
        </nav>
        <button class="ham-btn" aria-label="ham button" data-active="false" tabindex="0" aria-controls="nav">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
        </button>
    </header>