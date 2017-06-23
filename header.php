<html>
		<head>
				<script src="https://use.fontawesome.com/f6852d480f.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" />
				<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
				<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
				<?php wp_head(); ?>
		</head>
		<body>
				<header>
						<nav>
						<li class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></li>
						<li class="icon"><i class="fa fa-bars" aria-hidden="true"></i></li>
						<?php wp_nav_menu(array('theme_location' => 'main-menu', 'fallback_cb' =>false)); ?>
						
						</nav>
				</header>
<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 50)
        }, 600);
        return false;
      }
    }
  });
});

$('.icon').click(function() {
		$('.menu-main-menu-container').toggle();
		$('nav i').toggleClass('fa-bars').toggleClass('fa-times')
});
</script>