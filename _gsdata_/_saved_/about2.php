﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<meta charset="utf-8">
		<title>Shinra</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/styles2.css" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="/css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/quicksand.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/jquery.flip.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		<!-- Nivo slider -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="css/superfish-left.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		<!-- SKIN -->
		<link rel="stylesheet" href="skins/plastic/style.css" type="text/css" media="screen" />

	<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"></head>
	
	<body class="">
	<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('facebook','The biggest social network in the world.','http://www.facebook.com/'),
	array('adobe','The leading software developer targeted at web designers and developers.','http://www.adobe.com/'),
	array('microsoft','One of the top software companies of the world.','http://www.microsoft.com/'),
	array('sony','A global multibillion electronics and entertainment company ','http://www.sony.com/'),
	array('dell','One of the biggest computer developers and assemblers.','http://www.dell.com/'),
	array('ebay','The biggest online auction and shopping websites.','http://www.ebay.com/'),
	array('digg','One of the most popular web 2.0 social networks.','http://www.digg.com/'),
	array('google','The company that redefined web search.','http://www.google.com/'),
	array('ea','The biggest computer game manufacturer.','http://www.ea.com/'),
	array('mysql','The most popular open source database engine.','http://www.mysql.com/'),
	array('hp','One of the biggest computer manufacturers.','http://www.hp.com/'),
	array('yahoo','The most popular network of social media portals and services.','http://www.yahoo.com/'),
	array('cisco','The biggest networking and communications technology manufacturer.','http://www.cisco.com/'),
	array('vimeo','A popular video-centric social networking site.','http://www.vimeo.com/'),
	array('canon','Imaging and optical technology manufacturer.','http://www.canon.com/')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>
	
	<!-- WRAPPER -->
	<div id="wrapper">
		
		<!-- HEADER -->
		<div id="header">
			<a href="index.html"><img id="logo" src="img/logo.png" alt="Nova" /></a>
			<!-- Social -->
			<div id="social-holder">
					<ul class="social">
						<li><a href="http://www.distant.ieml.ru" class="poshytip moodle" title="Вход в систему Moodle"></a></li>
						<li><a href="http://www.facebook.com" class="poshytip facebook" title="Добавьтесь в друзья"></a></li>
						<li><a href="http://www.twitter.com/cdo_kazan" class="poshytip twitter" title="Мы в Twitter"></a></li>
						<li><a href="http://www.vk.com/distant.ieml" class="poshytip vimeo" title="Мы Вконтакте"></a></li>
					<!--	<li><a href="http://www.addthis.com" class="poshytip addthis" title="Tell everybody"></a></li>
						<li><a href="http://www.vimeo.com" class="poshytip vimeo" title="View our videos"></a></li>
						<li><a href="http://www.youtube.com" class="poshytip youtube" title="View our videos"></a></li>-->
					</ul>
				</div>
			<!-- ENDS Social -->
			
			<!-- Navigation -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.html">ГЛАВНАЯ</a></li>
					<li class="current-menu-item"><a href="features.html">О НАС</a>
						<ul>
							<li><a href="features-appearance.html"><span> Appearance</span></a></li>
							<li><a href="features-columns.html"><span> Columns layout</span></a></li>
							<li><a href="features-accordion.html"><span> Accordion</span></a></li>
							<li><a href="features-toggle.html"><span> Toggle box</span></a></li>
							<li><a href="features-tabs.html"><span> Tabs</span></a></li>
							<li><a href="features-infobox.html"><span> Text box</span></a></li>
							<li><a href="features-monobox.html"><span> Icons</span></a></li>
						</ul>
					</li>
					<li><a href="blog.html">BLOG</a></li>
					<li><a href="portfolio.html">PORTFOLIO</a></li>
					<li><a href="gallery.html">НАШИ ФОТОГРАФИИ</a>
						<ul>
							<li><a href="gallery.html"><span> Four columns </span></a></li>
							<li><a href="gallery-3.html"><span> Three columns </span></a></li>
							<li><a href="gallery-2.html"><span> Two columns </span></a></li>
							<li><a href="video-gallery.html"><span> Video gallery </span></a></li>
						</ul>
					</li>
					<li><a href="features2.html">ЧАВО</a></li>
					<li><a href="contact.html">КОНТАКТЫ</a></li>
				</ul>
				<!-- Navigation -->	
			
			<!-- search -->
			<div class="top-search">
				<form  method="get" id="searchform" action="#">
					<div>
						<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
						<input type="submit" id="searchsubmit" value=" " />
					</div>
				</form>
			</div>
			<!-- ENDS search -->
			
			<!-- Breadcrumb-->
			<!--div id="breadcrumbs">
				<a title="Home" href="index.html">Home</a>
				Features
			</div>
			<!-- ENDS Breadcrumb-->	

		</div>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			
			<!-- content -->
			<div id="content">
				<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>
				<!-- title -->
				<div id="page-title">
					<span class="title">Features</span>
					<span class="subtitle">Typography styling</span>
				</div>
				<!-- ENDS title -->
				
				<!-- page-content -->
				<div id="page-content">
					<h4 class="line-divider">Headers</h4>
					<h1>Lorem ipsum dolor</h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					<h2>Lorem ipsum dolor</h2>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					<h3>Lorem ipsum dolor</h3>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					<h4>Lorem ipsum dolor</h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					<h5>Lorem ipsum dolor</h5>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					<h6>Lorem ipsum dolor</h6>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames, Pellentesque habitant morbi tristique senectus et netus et malesuada fames Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					
					
					<!-- Lists -->
					<h4 class="line-divider">Bullet list</h4>
					<div class="lists-check">
						<ul>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
						</ul>
					</div>
					
					<div class="lists-arrow">
						<ul>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
						</ul>
					</div>
					
					<div class="lists-plus">
						<ul>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
						</ul>
					</div>
					
					<div class="lists-star">
						<ul>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
						</ul>
					</div>
					
					<div class="lists-heart">
						<ul>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
							<li>Lorem ipsum dolor amet</li>
						</ul>
					</div>
					<!-- ENDS  Lists -->
				
					<!-- Quotes -->
					<h4 class="line-divider">Quotes</h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="pullquote-right">THIS IS A PULL QUOTE RIGHT, LOREM IPSUM DOLOR AMET</span> Quisque sit amet est et sapien ullamcorper pharetra.  Ut felis. Praesent dapibus, neque id cursus faucibus,  Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
					
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="pullquote-left">THIS IS A PULL QUOTE RIGHT, LOREM IPSUM DOLOR AMET</span> Quisque sit amet est et sapien ullamcorper pharetra.  Ut felis. Praesent dapibus, neque id cursus faucibus,  Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>				
					<!-- ENDS Quotes -->
					
					
					<!-- Dropcaps -->
					<h4 class="line-divider">Drop caps</h4>
					<p class="dropcap">Aliquam enim ac eros eu erat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.Lacus enim ac eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, nt quis, accumsan porttitor, facilisis luctus, metus.Lacus eni quis,tincidunt quis, facilisis luctus.</p>	
					<p class="dropcap dark">Aliquam enim ac eros eu erat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.Lacus enim ac eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, nt quis, accumsan porttitor, facilisis luctus, metus.Lacus eni quis,tincidunt quis, facilisis luctus.</p>
					<!-- ENDS Dropcaps -->
					
					
					<!-- Highlight -->
					<h4 class="line-divider">Highlighted text</h4>
					<p><span class="highlight">Regular highlighted</span> Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.Lacus enim ac eros eu erat. <span class="highlight-red">Red highlighted</span> Aliquam erat volutpat. Nam dui mi, tincidunt quis, nt quis, accumsan porttitor, facilisis luctus, metus.Lacus eni quis,tincidunt quis, accumsan porttitor, facilisis luctus, metus.<span class="highlight-blue">Blue highlighted</span> Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.Lacus enim ac eros eu erat. Aliquam erat volutpat. Nam dui mi,<span class="highlight-green">Green highlighted</span> tincidunt quis, nt quis, accumsan porttitor, facilisis luctus, metus.Lacus eni quis,tincidunt quis, accumsan porttitor, facilisis luctus, metus.Nam dui mi, tinciduntquis,tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>	
					<!-- ENDS Highlight -->
					
					
					<!-- Link buttons -->
					<h4 class="line-divider">Link buttons</h4>
					<p><a href="#" class="link-button">Link button</a></p>
					<p><a href="#" class="link-button">The button width fixes to its content</a></p>
					<p><a href="#" class="link-button-light">Inverted color</a></p>
					<p><a href="#" class="link-button-light">A lot and lots of text fits here</a></p>
					<div class="clear"></div>
					<!-- ENDS Link buttons -->
					
					
					<!-- table -->
					<h4 class="line-divider">Tables</h4>
					<table>				
						<tbody>
							<tr>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
							</tr>
							<tr>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
							</tr>
								<tr>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
							</tr>
							<tr>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
							</tr>
								<tr>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
							</tr>
							<tr>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
								<td>Lorem ipsum</td>
							</tr>
						</tbody>
					</table>
					<!-- ENDS table -->
					
					
				</div>
				<!-- ENDS page-content -->
				
				

			</div>
			<!-- ENDS content -->
			
			<!-- Twitter 			<div id="twitter">
				<a href="#" id="prev-tweet"></a>
				<a href="#" id="next-tweet"></a>
				<div id="tweets">
					<ul class="tweet_list"></ul>
				</div>
			</div>
			 ENDS Twitter -->


		</div>
		<!-- ENDS MAIN -->
		
		<!-- FOOTER -->
		<div id="footer"><br><br>
			
			<!-- footer-cols -->
			<ul id="footer-cols">
				<li class="col">
					<h6>About the theme</h6>
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
				</li>
				<li class="col">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Webdesign</a></li>
						<li><a href="#/">Wordpress</a></li>
						<li><a href="#">Photo</a></li>
						<li><a href="#">Code</a></li>
						<li><a href="#">Web design</a></li>
						<li><a href="#/">Marketplace</a></li>
						<li><a href="#">Writting</a></li>
						<li><a href="#">Drawings</a></li>
					</ul>
				</li>
				<li class="col">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Webdesign</a></li>
						<li><a href="#/">Wordpress</a></li>
						<li><a href="#">Photo</a></li>
						<li><a href="#">Code</a></li>
						<li><a href="#">Web design</a></li>
						<li><a href="#/">Marketplace</a></li>
						<li><a href="#">Writting</a></li>
						<li><a href="#">Drawings</a></li>
					</ul>
				</li>
			</ul>
			<!-- ENDS footer-cols -->
			
			<!-- Bottom -->
			<div id="bottom">
				2011 <a href="http://www.luiszuno.com"> Luiszuno</a> all rights reserved
				
				<div id="to-top" class="poshytip" title="Наверх"></div>
				
			</div>
			<!-- ENDS Bottom -->
		</div>
		<!-- ENDS FOOTER -->
	
	</div>
	<!-- ENDS WRAPPER -->
	
	</body>
	
</html>