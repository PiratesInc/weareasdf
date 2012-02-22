<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8" />
	<title>We Are ASDF | A Simple Digital Factory</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>  
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- CSS
  	================================================== -->
	<link rel="stylesheet" href="assets/stylesheets/styles.css" />


<!-- TWITTER
  	================================================== -->
<script type="text/javascript">
//Your twitter name
var twitter_name = "weareasdf";
//Number of tweets you want to get back
var twitter_count = 6;
//Callback function name
var callback_name = "tweet_callback";
//Twitter search url
var twitter_search = "http://twitter.com/statuses/user_timeline";
//Return type (json or xml)
var return_type = "json";
//Adds script tags to the head/body tag
( function() {
var ts = document.createElement('script');
ts.type = 'text/javascript';
ts.async = true;
ts.src = twitter_search + "." + return_type + "?screen_name=" + twitter_name + "&count=" + twitter_count + "&callback=" + callback_name;
( document.getElementsByTagName( 'head' )[ 0 ] || document.getElementsByTagName( 'body' )[ 0 ] ).appendChild( ts );
} )();
</script>
<script type="text/javascript">
//Call back function
function tweet_callback( data ) {
//Loop through the data from twitter
$.each( data, function( i, tweet ) {
//Make sure the text isn't undefined
if( tweet.text != undefined ) {
//Lets do some regex magic to replace urls, hashtags, and usernames
var text = tweet.text.toString().replace( /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig, '<a href="$1">$1</a>' ).replace( /(^|\s)@(\w+)/, '<a href="http://www.twitter.com/$2">@$2</a>' ).replace( /[#]+[A-Za-z0-9-_]+/ig, function(t) { var tag = t.replace("#","%23"); return t.link("http://search.twitter.com/search?q="+tag); } );
//Lets append each tweet to a ul with the id of tweet_container
$( "#tweet_container" ).append( "<li>" + text + "</li>");
}
} );
}</script>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
	
    <?php include("analytics.php"); ?>



    
</head>
<body>


<div class="super-container full-width" id="section-tophat">

	<!-- 960 Container -->
	<div class="container">			
		
		<div class="sixteen columns">
			<span class="subscribe"><a href="index.php">WeAreASDF.com</a></span>
			<span class="tagline">We Are A Simple Digital Factory</span>
		</div>
		
	</div>
	
</div>



<!-- Super Container for entire site -->
<div class="super-container full-width" id="section-header">

	<!-- 960 Container -->
	<div class="container">	


<!-- Super Container for entire site -->


		
		
		<!-- Header -->
		<header>
		<div class="sixteen columns">
			
			<!-- Branding -->
			<div class="six columns alpha">
				<a href="index.php">
					<h1 id="logo" style="margin-top: 40px; margin-bottom: 30px;">
						<img src="assets/images/theme/asdf-logo/logo.png" alt="logo" />
					</h1>
				</a>
			</div>
			<!-- /End Branding -->
			
			<div class="ten columns omega">
			<!--	<a href="#" class="header-advert">
					<img src="demo-images/468.jpg" alt="advert" />
				</a>-->
			</div>  
			
			<hr class="remove-bottom"/>
		</div>
		
		<!-- Menu -->
		<div class="sixteen columns" id="menu">
			
			<div class="twelve columns alpha navigation">
				
				<!-- Default Superfish Nav (add/remove "light" class to toggle visual styling) -->
				<ul class="sf-menu light">
					<!--<li><a href="index.php"><strong>Home</strong> <span>Descubre ASDF</span></a></li>-->
					<li><a href="about.php"><strong>Sobre ASDF</strong> <span>Quiénes Somos</span></a>
						<!--<ul>
							<li><a href="960.html">Flexible 960.GS</a></li>
							<li><a href="lorem.html">HTML Test Page</a></li>
							<li><a href="blog.html">Blog Loop Template</a></li>
							<li><a href="blog-post.html">Blog Post Template</a></li>
						</ul>
					</li>-->
					<!--<li><a href="features.html"><strong>Features</strong> <span>Skins &amp; Fontstacks</span></a>
						<ul>
							<li><a href="serif.html">Fontstacks</a>
								<ul>
									<li><a href="serif.html">Serif</a></li>
									<li><a href="sans-serif.html">Sans-Serif</a></li>
								</ul>
							</li>
							<li><a href="light.html">Light <small style="color: #999;">*demo default</small></a></li>
							<li><a href="clean.html">Clean</a>
								<ul>
									<li><a href="clean-home.html">Clean Homepage</a></li>
									<li><a href="clean.html">Clean Page Sample</a></li>
								</ul> 
							</li>						
							<li><a href="dark.html">Dark</a>
								<ul>
									<li><a href="dark-home.html">Dark Homepage</a></li>
									<li><a href="dark.html">Dark Page Sample</a></li>
								</ul> 
							</li>
						</ul>
					</li>
					<li><a href="portfolio.php"><strong>Portfalio</strong> <span>Ve nuestro trabajo</span></a>
						<ul>
							<li><a href="portfolio-2.html">2 columns</a></li>
							<li><a href="portfolio-3.html">3 columns</a></li>
							<li><a href="portfolio-4.html">4 columns</a></li>
						</ul>					
					</li>
					<li><a href="contact.php"><strong>Contacto</strong> <span>¿Quieres contactarnos?</span></a></li>-->
				</ul>
				<!-- /End Default Superfish Nav-->
				
				<!-- Responsive Nav - Displays when screen gets small enough -->
				<form id="responsive-nav" action="insert_action" method="post">
					<select class="chzn-select">
						<!--<option value="index.php">Home</option>-->
						<option value="about.php">Sobre ASDF</option>
						<!--<option value="features.html">Features</option>-->
						<!--<option value="portfolio.php">Portfalio</option>-->
						<!--<option value="contact.php">Contacto</option>-->
					</select>
				</form>
				<!-- /End Responsive Nav -->	
				
							
			</div>	

			<div class="four columns omega align-right" id="tagline">
				<!-- <p>This is the site tagline</p> -->
				
<ul class="social">
				
				<!--	<li><a href="#"><img src="assets/images/theme/social-icons/google_plus_32.png" alt="google" title="Google+" /></a></li>-->
                  <!--  <li><a href="#"><img src="assets/images/theme/social-icons/facebook_32.png" alt="facebook" title="Facebook"/></a></li>-->
					<li><a href="http://www.twitter.com/WeAreASDF" target="_blank"><img src="assets/images/theme/social-icons/twitter_32.png" alt="twitter" title="Twitter @WeAreASDF" /></a></li>
					<!--<li><a href="#"><img src="assets/images/theme/social-icons/rss_32.png" alt="rss" title="RSS" /></a></li>-->
                    <!-- Place this tag where you want the +1 button to render -->
					
				</ul>
			</div>			
			
			<hr class="remove-top"/>
		</div>	
		 
		<!-- /End Menu -->
		
		</header>
		<!-- /End Header -->
