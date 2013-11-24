<!DOCTYPE html>
<html>
  <head>
  <title><?php bloginfo('name'); ?></title>
  <link rel="SHORTCUT ICON" href="img/favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <?php wp_head(); ?>

  <!-- <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.custom.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/divPeek.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script> -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42403118-6', 'aliveandmodern.com');
    ga('send', 'pageview');

  </script>
</head>
<body>
  <div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-custom" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div id="navbar-brand" class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="<?php echo get_option('home') ?>"><span style="color:#089909;">Alive</span> and <span style="color:black">Modern</span></a>
    </div>
    <div class="navbar-collapse collapse">
      <!-- <ul id="nav-buttons" class="nav navbar-nav"> -->
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'sort_column' => 'menu_order', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'nav-buttons' ) ); ?>
      <!-- </ul> -->
    </div> <!-- /.navbar-collapse -->
  </div> <!-- </nav> -->

  <div class="body-container">
    <div id="fb-root"></div>