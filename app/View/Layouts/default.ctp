<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Millers Food Market</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/colors/green.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Top Bar
================================================== -->

<!--  If you want to use topbar with transparent header
	  add .transparent class to the #topbar and put #top-bar inside #header-container div -->

<div id="top-bar">
	<div class="container">
		<div class="row">
			<!-- Top Bar Menu -->
			<div class="col-md-8 col-sm-7">
			</div>
                        <div class="col-md-4 col-sm-5">
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> 410-374-4545</li>
					<li><i class="fa fa-envelope"></i> <a href="mailto:ken@millersfoodmarket.com?Subject=Website%20Contact">ken@millersfoodmarket.com</a></li>
				</ul>
                        </div>
			
		</div>

	</div>
</div>
<div class="clearfix"></div>


<!-- Header
================================================== -->
<div id="header-container" class="basic">
<div id="main-header">
<div class="container" style="width:80%">

	<div class="row">
		<div class="header">

			<div class="col-md-2 col-sm-12 col-xs-12">
				<div id="logo" class="margin-top-25">
					<a href="/"><img src="/images/header.gif" alt=""></a><br>
				</div>
			</div>


			<div class="col-md-10 col-sm-12">

				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>
				
					<!-- Main Navigation -->
					<nav id="navigation">

						<ul class="menu alt2" id="responsive">

							<li class="dropdown"><a href="/" class="current">Home</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/news">News</a></li>
							<li><a href="/specials">Weekly Specials</a></li>
							<li class="dropdown" ><a href="/pages/recipes">Recipes</a></li>
							<li><a href="/pages/meats">Meats</a></li>
							<li><a href="/pages/hotfoods">Hot Foods</a></li>
							<li><a href="/pages/partytray">Party Trays</a></li>
							<li><a href="/pages/sandwiches">Subs & Sandwiches</a></li>
							<li><a href="/pages/contact-classic">Contact</a></li>
							<!-- Cart Icon -->
							<li class="cart-icon"><a href="shopping-cart.html"><i class="sl sl-icon-basket"></i><span class="cart-counter">0</span></a></li>

						</ul>
					</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>
</div>
</div>

            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>

<!-- Footer
================================================== -->

<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row" style="margin-bottom:20px;">
			<div class="col-md-5 col-sm-6">
				<p>Thanks for shopping at your community food store and welcome to our website. Enjoy all our great savings, meats, and party platters for your next special event!<!--Click the links to the right for great savings, meats and party platters for your next special event.--></p>
				<!--<a href="#" class="button social-btn"> Place an Order Now!</a>-->
			</div>

			<div class="col-md-4  col-sm-6">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
							<li class="dropdown"><a href="/" class="current">Home</a></li>
							<li><a href="/pages/aboutus">About Us</a></li>
							<li><a href="/news">News</a></li>
							<li><a href="/specials">Weekly Specials</a></li>
							<li class="dropdown" ><a href="/pages/recipes">Recipes</a></li>
				</ul>

				<ul class="footer-links">
							<li><a href="/pages/meats">Meats</a></li>
							<li><a href="/pages/hotfoods">Hot Foods</a></li>
							<li><a href="/pages/partytray">Party Trays</a></li>
							<li><a href="/pages/sandwiches">Subs & Sandwiches</a></li>
							<li><a href="/pages/contact-classic">Contact</a></li>
				</ul>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>3075 Manchester Road Manchester, MD 21102</span> <br>
					Phone: <span>410-374-4545 </span><br>
					E-Mail:<span> ken@millersfoodmarket.com </span><br>
				</div>
			</div>

		</div>

	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="/scripts/counterup.min.js"></script>
<script type="text/javascript" src="/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.sticky-kit.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.twentytwenty.js"></script>
<script type="text/javascript" src="/scripts/jquery.event.move.js"></script>
<script type="text/javascript" src="/scripts/jquery.photogrid.js"></script>
<script type="text/javascript" src="/scripts/jquery.tooltips.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.pricefilter.js"></script>
<script type="text/javascript" src="/scripts/jquery.stacktable.js"></script>
<script type="text/javascript" src="/scripts/jquery.contact-form.js"></script>
<script type="text/javascript" src="/scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="/scripts/headroom.min.js"></script>
<script type="text/javascript" src="/scripts/modernizr.custom.js"></script>
<script type="text/javascript" src="/scripts/puregrid.js"></script>
<script type="text/javascript" src="/scripts/flexibility.js"></script>
<script type="text/javascript" src="/scripts/custom.js"></script>

<!-- Google Maps -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCvTttPla3qcvlGNCgfOYeH_7U_KcHcy7U" async="" defer="defer" type="text/javascript"></script>
<script src="scripts/jquery.gmaps.min.js"></script>


<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"/scripts/",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap"></div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:00,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:00,
							v_offset:0
						}
					}
					,
					bullets: {
				enable:true,
				hide_onmobile:true,
				hide_under:600,
				style:"hermes",
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				direction:"horizontal",
				h_align:"center",
				v_align:"bottom",
				h_offset:0,
				v_offset:50,
				space:5,
				tmp:''
					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
			},
			responsiveLevels:[1900, 1700, 1600, 768, 480],
			visibilityLevels:[1400,1200,992,768,480],
			gridwidth:[1380, 1380, 1380, 1180, 778, 480],
			gridheight:[750, 710, 580, 800, 800],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
		}
	});	/*ready*/
</script>	


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="/scripts/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/scripts/extensions/revolution.extension.video.min.js"></script>


<!-- Style Switcher
================================================== -->
<script src="/scripts/switcher.js"></script>

<div id="style-switcher" style="display:none;">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<!--<li><a href="#" class="blue" title="Blue"></a></li>-->
			<li><a href="#" class="green" title="Green"></a></li>
<!--			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>-->
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</div>
<!-- Wrapper / End -->

</body>
</html>