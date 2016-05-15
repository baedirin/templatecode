<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name= "viewport" content= "width=device-width, initial-scale=1.0">
<meta name= "ROBOTS" content= "NOINDEX, NOFOLLOW">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<title>Jayne Strange</title>
<link rel= "stylesheet" href= "styles/navstyles.css"/>
<link rel= "stylesheet" href= "styles/style.css"/>
<link rel= "stylesheet" type= "text/css" href= "https://fonts.googleapis.com/css?family=Quicksand"/>
<?php wp_head(); ?>
</head>
<body <?php body_class( 'home-page' ); ?>>
<header id="navHeader">
    <div id= "siteBanner">
        <img alt= "banner" src= "images/banner.jpg"/>
    </div>

<div id= "subHeader">
 	<h1 id= "pageTitle">Home</h1>
    <a href="#" id= "hamburger" class="menu-link">&#9776;</a>
</div><br>
</header>
<div id= "leftContainer">
<a href= "template.php"><img alt= "logo" id= "siteLogo" src= "images/logo.png"/></a>
<nav id= "cssmenu">
	<ul>
    	<li class="active"><a href="template.php"><span>Home</span></a></li>
   		<li class="has-sub"><a href="#"><span>About</span></a>
            <ul>
              <li><a href="about.php"><span>About Jayne</span></a></li>
              <li><a href="contact.php"><span>Contact Jayne</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="gallery.php"><span>Artwork</span></a>
          	<ul>
              <li><a href="commission.php"><span>Commission Artwork</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="products.php"><span>Products</span></a>
            <ul>
              <li><a href="pricing.php"><span>Pricing and Info</span></a></li>
            </ul>
      	</li>
    </ul>
</nav>
</div>
<div id= "mainContent">
  <section><?php the_content(); ?>
  <?php
	if ( have_posts() ) {
  	while ( have_posts() ) {
    	the_post(); ?>

  <h2><?php the_title(); ?></h2>

  <?php }#end while
  }else{ ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php } ?>

  </section>
	<div id= "contentCarousel">
    	<img id= "imgCarousel" alt= "carousel" src= "images/homeimg.jpg"/>
    </div>
    <article>
    <h1><?php bloginfo( 'Welcome to Jayne Strange!' ); ?></h1>

    <p>This is my website, where I show things I've drawn, created, and crafted.</p>
	<p>I am a freelance artist in the western US. My work varies from paintings to sculpture and bone engravings.</p>
    <p>I have a beautiful three year old daughter I spend most of my time with and am happily married. My personal hobbies include art and playing games. I love Lord of the    Rings/The Hobbit, unicorns, werewolves, and anything with bone/skulls/skeletons.</p>
    <p>For commission information, pricing and my past work, please explore my website and do not hesitate to contact me!</p>
    </article>

<footer id= "footerStyles">
	<div class= "linkNav">
    	<p>
    		<a href= "template.php">Home</a>
    		<a href= "about.php">About</a>
    		<a href= "contact.php">Contact</a>
    		<a href= "commission.php">Artwork</a>
    		<a href= "pricing.php">Pricing</a>
        </p>
     </div>
 	<p>Site design © Brittaney Nico Davis, 2016
      <br>
       All artwork and content © Hannah Warner, 2016</p>
  	<p><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a></p>
    <p><a href="disclaimer.php">DISCLAIMER</a></p>
</footer>
</div>
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src= "script/navscript.js"></script>
<script>
	$(document).ready(function() {
		$(".menu-link").click(function(){
			$("#leftContainer").toggleClass("expanded");
			});
		});
</script>
 <?php wp_footer(); ?>
</body>
</html>
