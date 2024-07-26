<!DOCTYPE html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" id="font-css" href="<?php echo get_template_directory_uri( ); ?>/assets/webfontkit/fontkit.css" media="all">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();  ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri();  ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();  ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri();  ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();  ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();  ?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();  ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<meta name="facebook-domain-verification" content="ohdtbd5vp4kdinwasmfrff4hipjo6z" />
			<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N6HHBF3');</script>
		<!-- End Google Tag Manager -->
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/webfontkit/natale.css?versdss123">

</head>
<body class="landing-workair">
	<script type="text/javascript"> _linkedin_partner_id = "3701418"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3701418&fmt=gif" /> </noscript>
<?php wp_body_open(); ?>
<header class="land-header" itemscope itemtype="http://schema.org/WebSite">
    <nav class="navbar">
        <div class="logo">
            Workair
        </div>
        <div id="menu" class="land-menu">
            <?php if( have_rows('header_menu') ): ?>
              <?php while ( have_rows('header_menu') ) : the_row(); ?>
                <a href="<?= get_sub_field('elemento')["url"] ?>">
                  <?= get_sub_field('elemento')["title"] ?>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a class="header-cta wp-block-button__link has-dcolor-background-color has-background wp-element-button" href="<?= get_field('header_cta')["url"] ?>">
          <?= get_field('header_cta')["title"] ?>
        </a>
    </nav>
</header>
<main id="main" class="main site-content">
