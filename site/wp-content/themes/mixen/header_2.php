<!DOCTYPE html>
<html lang="es" class="no-js">

    <head>
        <!-- Meta Data -->
        <title><?php wp_title(''); ?></title>
        <meta name="description" content="Somos una agencia de comunicación donde nos especializamos en el diseño de paginas web, software, marketing, apps y manejo de campañas digitales." />
        <meta name="keywords" content="Diseño de Páginas Web, Diseño Web, Publicidad, Marketing, Páginas Web en Chihuahua, Marketing, Comunicación, Publicidad, Apicaciones Moviles, Apps, Redes Sociales, Campañas en Facebook">
        <meta name="author" content="Agencia Mixen">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon/favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#1f1f22">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_url')?>/img/favicon/mstile-144x144.png">

        <link type="text/css" media="screen" rel="stylesheet" href="../awwwards2.css" />

        <!-- Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php bloginfo('template_url')?>/css/font-awesome.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="<?php bloginfo('template_url')?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url')?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url')?>/css/preloader.css" rel="stylesheet">

        <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
        <link href="<?php bloginfo('template_url')?>/css/responsive.css" rel="stylesheet">

        <script src="<?php bloginfo('template_url')?>/js/modernizr.custom.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>

	<body id="bigWrapper" data-spy="scroll" data-target=".navbar-default" data-offset="100">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-43550014-1', 'auto');
          ga('send', 'pageview');

        </script>

        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">MIXEN</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                        <?php  wp_nav_menu( array(
                            'theme_location'    => 'menu_blog',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'walker'        => new my_custom_li_nav_menu
                        ) );
                        ?>  
                        <!--<ul class="nav navbar-nav">
                            <li class="active"><a data-scroll href="#intro">Inicio</a></li>
                            <li><a data-scroll href="#about">Nosotros</a></li>
                            <li class="dropdown"> <a data-scroll href="#portfolio" class="dropdown-toggle" data-toggle="dropdown">Portafolio</a> </li>
                            <li><a data-scroll href="#blogIntro">Blog</a></li>
                            <li><a data-scroll href="#contact">Contact</a></li>

                        </ul>-->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>