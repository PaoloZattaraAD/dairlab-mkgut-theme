<!DOCTYPE html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    $languages = icl_get_languages();
    if(!empty($languages)){
      if($languages["it"]['active']){
        ?>
        <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"countryDetection":true,"enableFadp":true,"enableLgpd":true,"enableUspr":true,"fadpApplies":true,"floatingPreferencesButtonDisplay":"bottom-right","floatingPreferencesButtonIcon":false,"lgpdAppliesGlobally":false,"perPurposeConsent":true,"siteId":3627126,"usprApplies":true,"cookiePolicyId":97128156,"lang":"it","floatingPreferencesButtonCaption":true, "banner":{ "acceptButtonCaptionColor":"#FFFFFF","acceptButtonColor":"#0073CE","acceptButtonDisplay":true,"backgroundColor":"#FFFFFF","closeButtonDisplay":false,"customizeButtonCaptionColor":"#4D4D4D","customizeButtonColor":"#DADADA","customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"logo":null,"ownerName":"dairlab.com","position":"float-bottom-center","rejectButtonCaptionColor":"#FFFFFF","rejectButtonColor":"#0073CE","rejectButtonDisplay":true,"showPurposesToggles":true,"showTitle":false,"showTotalNumberOfProviders":true,"textColor":"#000000" }};
        </script>
        <script type="text/javascript" src=https://cs.iubenda.com/autoblocking/3627126.js></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stable/stub.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/stable/iubenda_cs.js" charset="UTF-8" async></script>
        <?php
      } else {
        ?>
        <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"countryDetection":true,"enableFadp":true,"enableLgpd":true,"enableUspr":true,"fadpApplies":true,"floatingPreferencesButtonDisplay":"bottom-right","floatingPreferencesButtonIcon":false,"lgpdAppliesGlobally":false,"perPurposeConsent":true,"siteId":3627126,"usprApplies":true,"cookiePolicyId":55879968,"lang":"en-GB","floatingPreferencesButtonCaption":true, "banner":{ "acceptButtonCaptionColor":"#FFFFFF","acceptButtonColor":"#0073CE","acceptButtonDisplay":true,"backgroundColor":"#FFFFFF","closeButtonDisplay":false,"customizeButtonCaptionColor":"#4D4D4D","customizeButtonColor":"#DADADA","customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"logo":null,"ownerName":"dairlab.com","position":"float-bottom-center","rejectButtonCaptionColor":"#FFFFFF","rejectButtonColor":"#0073CE","rejectButtonDisplay":true,"showPurposesToggles":true,"showTitle":false,"showTotalNumberOfProviders":true,"textColor":"#000000" }};
        </script>
        <script type="text/javascript" src=https://cs.iubenda.com/autoblocking/3627126.js></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stable/stub.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/stable/iubenda_cs.js" charset="UTF-8" async></script>
        <?php
      }
    }
    ?>
        
    
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
<body <?php if(is_admin_bar_showing()){ echo 'id="logged"';} ;?>>
	<script type="text/javascript"> _linkedin_partner_id = "3701418"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3701418&fmt=gif" /> </noscript>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header nav-down" itemscope itemtype="http://schema.org/WebSite">
    <nav class="navbar">
        <div class="site-branding-container">
            <a class="home-url" rel="home" href="<?php echo esc_url(home_url()); ?>" title="D-Air Lab" itemprop="url">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.8 18.43"><path d="M.25 18.4a.25.25 0 0 1-.25-.25V.4A.25.25 0 0 1 .25.15h7.87a3.5 3.5 0 0 1 3.57 3.57v11.14a3.5 3.5 0 0 1-3.57 3.57zm7.68-1.89a1.56 1.56 0 0 0 1.55-1.55V3.6a1.56 1.56 0 0 0-1.55-1.55H2.22v14.49z" fill="currentColor"></path><path d="M18.51.97a1.5 1.5 0 0 1 1.28-.94 3.21 3.21 0 0 1 1 0 1.5 1.5 0 0 1 1.3.94l5.53 16.83a2.21 2.21 0 0 1 .12.39.27.27 0 0 1-.27.25h-1.35a.75.75 0 0 1-.61-.49l-1.67-5h-7.07l-1.62 5a.75.75 0 0 1-.62.49h-1.35a.27.27 0 0 1-.27-.25 2.24 2.24 0 0 1 .12-.39zm2.09 2.29l-.32-1.55-.32 1.55-2.58 7.8h5.81zm8.73 1.89a.25.25 0 0 1 .25-.25h1.72a.25.25 0 0 1 .25.25v13a.25.25 0 0 1-.25.25h-1.72a.25.25 0 0 1-.25-.25zm8.64 1.77a.6.6 0 0 0-.54.59v10.68a.25.25 0 0 1-.25.25h-1.75a.25.25 0 0 1-.25-.25V7.61a2.65 2.65 0 0 1 2.71-2.71h3.44a.25.25 0 0 1 .25.25v1.53a.25.25 0 0 1-.25.25zm9.91 9.62a.25.25 0 0 1 .25.25v1.4a.25.25 0 0 1-.25.25h-2.11a2.05 2.05 0 0 1-2.21-2.21V.4a.25.25 0 0 1 .25-.25h1.72a.25.25 0 0 1 .25.25v15.9a.23.23 0 0 0 .25.25zm9.57-8.9a.85.85 0 0 0-.93-.84h-5.26a.17.17 0 0 1-.17-.17V5.08a.19.19 0 0 1 .17-.17h6.13a2.16 2.16 0 0 1 2.29 2.21v9.1a2.05 2.05 0 0 1-2.21 2.21h-4.9a2.13 2.13 0 0 1-2.29-2.17v-2.48a2.23 2.23 0 0 1 1.3-2.46l5.41-1.45c.42-.17.47-.34.47-.66zm-4.62 5.26c-.52.22-.52.86-.52 1.06v1.89a.7.7 0 0 0 .76.69h3.62a.69.69 0 0 0 .76-.74v-4.23l-.71.37zM62.87.4a.25.25 0 0 1 .25-.25h1.72a.25.25 0 0 1 .25.25v4.5h5.07a2.61 2.61 0 0 1 2.66 2.66v8.17a2.71 2.71 0 0 1-2.71 2.71h-4.58a2.46 2.46 0 0 1-2.66-2.66zm2.24 15.38a.75.75 0 0 0 .76.76h3.9a.82.82 0 0 0 .81-.81V7.59a.79.79 0 0 0-.79-.79h-4.7z"></path></svg>
            </a>
        </div>
        <div id="menu-1" class="main-menu menu-1">
            <ul class="navbar-nav">
            <?php wp_nav_menu( array( 'items_wrap' => '%3$s','theme_location' => "menu-1",'container' => null ) ); ?>
            </ul>
        </div>
        <div id="menu-2" class="main-menu menu-2">
            <ul class="navbar-nav">
            <?php wp_nav_menu( array( 'items_wrap' => '%3$s','theme_location' => "menu-2",'container' => null  ) ); ?>
            </ul>
        </div>

        <div class="button-menu-wrapper-toogle">
            <button id="toogle-menu" class="navbar-toggler">
                <span></span>
                <span class="l-line"></span>
                <span></span>
            </button>
        </div>
    </nav>
</header>
<main id="main" class="main site-content">
