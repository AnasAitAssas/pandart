<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PANDART</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="plugins/materialize/css/materialize.css"  media="screen,projection"/>
    <link href="css/pandart.css" rel="stylesheet"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
    <link href="plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <script type="text/javascript" src="plugins/materialize/js/materialize.js"></script>
    <script>

    	$(document).ready(function(){
    		$('select').material_select();
    		$('.datepicker').pickadate({
			    selectMonths: true, 
			    selectYears: 15
			  });
			$("#back-to-top").css({"display": "none"});
		  $('#body-slider-in').bxSlider({
		  		auto:true,
		  		controls:false,
		  		mode:'fade'
		  	});

			var offset = 250;
			var duration = 500;
			$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {
					$("#back-to-top").fadeIn(duration);
				} else {
					$("#back-to-top").fadeOut(duration);
				}
			});
		});

	    function showSubMenu(){
	    	$('#header-submenu').slideToggle();
	    	$('#header-submenu').css("display","inline-block");
	    }

	    function openLogIn(){
	    	$('#popup-overlay').fadeIn();
	    	$('#popup-account').fadeIn();
	    	$('#popup-signin').hide();
	    	$('#popup-login').fadeIn();
	    	$('#button-signin').removeClass("popup-inline-buttons-active");
	    	$('#button-signin').removeClass("signin-inline-bg-active");
	    	$('#button-login').addClass("popup-inline-buttons-active");
	    	$('#button-login').addClass("login-inline-bg-active");
			var divHeight = $('#popup-account').height();
			$('#popup-account').css("margin-top","-"+((divHeight/2)+20)+"px");
	    }

	    function openSignIn(){
	    	
	    	$('#popup-overlay').fadeIn();
	    	$('#popup-account').fadeIn();
	    	$('#popup-signin').fadeIn();
	    	$('#popup-login').hide();
	    	$('#button-signin').addClass("popup-inline-buttons-active");
	    	$('#button-signin').addClass("signin-inline-bg-active");
	    	$('#button-login').removeClass("popup-inline-buttons-active");
	    	$('#button-login').removeClass("login-inline-bg-active");
			var divHeight = $('#popup-account').height();
			$('#popup-account').css("margin-top","-"+((divHeight/2)+20)+"px");

	    }

	    function openAbout(){
	    	
	    	$('#popup-overlay').fadeIn();
	    	$('#popup-about').fadeIn();
			var divHeight = $('#popup-about').height();
			$('#popup-about').css("margin-top","-"+((divHeight/2)+20)+"px");
	    }

	    function hideAll(){
	    	$('#popup-overlay').fadeOut();
	    	$('#popup-account').fadeOut();
	    	$('#popup-about').fadeOut();

	    }

	    function showDetail(item)
	    {
	    	$('#store-grid').css("height","auto");
	    	$('#'+item.id).prop('onclick',null).off('click');
	    	
	    	$('#'+item.id).css("padding","20px");
	    	$('#'+item.id).height(600);
	    	$('#'+item.id).width($('#'+item.id).parent().parent().width());
	    	$('#'+item.id+'-close').fadeIn(1500);
	    	$('#'+item.id+'-social').fadeIn(1500);
	    	$('#'+item.id+'-buy').fadeIn(1500);
	    	$('#'+item.id+'-image').width(400);
	    	$('#'+item.id+'-image').height(560);
	    	$('#'+item.id+'-image').css("float","left");
	    	$('#'+item.id+' img').width(400);
	    	$('#'+item.id+' img').height(560);
	    	$('#'+item.id+' img').css("float","left");
	    	$('.store-grid-item').each(function(){
	    		if(this.id != item.id)
	    		{
	    			$(this).hide();
	    		}
	    	});
			
	    	$('html, body').animate({scrollTop: $('#'+item.id).offset().top-38}, 500);
			$('#'+item.id+'-detail').fadeIn(1500);
	    }

	    function hideDetail(item)
	    {
	    	var id=item.id;
	    	id = id.replace("-close","");

	    	$('#store-grid').css("height","260px");
	    	$('#'+id).css("padding","0px");
	    	$('#'+id+'-close').hide();
	    	$('#'+id+'-social').hide();
	    	$('#'+id+'-buy').hide();
	    	$('#'+id+'-image').css("width","100%");
	    	$('#'+id+'-image').css("height","100%");
	    	$('#'+id+'-image').css("float","left");
	    	$('#'+id+' img').css("width","100%");
	    	$('#'+id+' img').css("height","100%");
	    	$('#'+id+' img').css("float","left");
	    	$('#'+id).css("height","250px");
	    	$('#'+id).css("width","182px");
	    	$('.store-grid-item').each(function(){
	    		if(this.id != id)
	    		{
	    			$(this).show();
	    		}
	    	});

	    	$('html, body').animate({scrollTop: $('#store').offset().top-38}, 500);

	    	$('#'+id).attr('onclick', 'showDetail(this)');
	    }
    </script>
</head>
<body>
	<!-- popup overlay -->
	<div id="popup-overlay" onclick="hideAll();">
	</div>

	<!-- popup account -->
	<div id="popup-account" class="popup-div">
		<div class="popup-close" onclick="hideAll();">
			<i class="material-icons">close</i>
		</div>
		<div class="popup-inline">
			<button class="popup-inline-buttons login-inline-bg" type="button" id="button-login" onclick="openLogIn();">
				<div class="header-buttons-text">log in</div>
			</button>
			<button class="popup-inline-buttons signin-inline-bg" type="button" id="button-signin" onclick="openSignIn();">
				<div class="header-buttons-text">new user</div>
			</button>
		</div>
		<!-- DIV LOGIN -->
		<div class="popup-inside-div" id="popup-login" hidden>
			<div class="popup-inside-div-form">
				<div class="form-input">
					<div class="form-input-icon"><i class="material-icons header-buttons-icon">person_outline</i> </div>
					<div class="form-input-text"><input type="email" placeholder="E-mail / Username"/></div>
				</div>
				<div class="form-input">
					<div class="form-input-icon"><i class="material-icons header-buttons-icon">lock_outline</i> </div>
					<div class="form-input-text"><input type="password" placeholder="Password"/></div>
				</div>

				<p class="f-left" style="margin-top:10px;margin-bottom:10px;">
			      <input type="checkbox" id="stay_signed" class="filled-in"/>
			      <label for="stay_signed" class="white-text">Stay signed in</label>
			    </p>
				<a href="" class="f-right white-text" style="margin-top:10px;margin-bottom:10px;">Having trouble ?</a>

				<div class="form-buttons">
					<button type="button" class="form-buttons-button f-right" style="width:100%;">SIGN IN</button>
				</div>
			</div>
			<div class="popup-inside-div-bigicon">
				<i class="large material-icons">people_outline</i>
			</div>
		</div>

		<!-- DIV SIGNIN -->
		<div class="popup-inside-div" id="popup-signin" hidden>
			<div class="popup-inside-div-form">
				<div class="form-input" style="width:49%;">
					<div class="form-input-text"><input type="text" placeholder="First name"/></div>
				</div>
				<div class="form-input f-right" style="width:49%;">
					<div class="form-input-text"><input type="text" placeholder="Last name"/></div>
				</div>
				<div class="form-input">
					<div class="form-input-text"><input type="email" placeholder="Email address"/></div>
				</div>
				<div class="form-input">
					<div class="form-input-text"><input type="password" placeholder="Password"/></div>
				</div>
				<div class="form-input">
					<div class="form-input-text"><input type="password" placeholder="Verify password"/></div>
				</div>

				<select class="f-left">
					<option value="" disabled selected>Choose your country</option>
					<option value="1">Morocco</option>
					<option value="2">United States of America</option>
					<option value="3">England</option>
				</select>
				
				<input type="date" class="datepicker" placeholder="Date of birth">
				
				<p class="f-left" style="margin-top:5px;margin-bottom:5px;">
			      <input type="checkbox" id="newsletter" class="filled-in"/>
			      <label for="newsletter" class="white-text" style="font-size:11px">Stay informed about FLIPFLOP products and services</label>
			    </p>

			    <p class="f-left" style="margin-top:5px;margin-bottom:5px;clear:both;">
			      <input type="checkbox" id="terms" class="filled-in"/>
			      <label for="terms" class="white-text" style="font-size:11px">I have read and agree to the Terms of Use and Privacy Policy</label>
			    </p>

			    <div class="form-buttons">
					<button type="button" class="form-buttons-button f-right" style="width:100%;">SIGN UP</button>
				</div>

			</div>
			<div class="popup-inside-div-bigicon">
				<i class="large material-icons">people_outline</i>
			</div>
		</div>

		
	</div>

	<!-- popup about -->
	<div id="popup-about" class="popup-div">
		<div class="popup-close" onclick="hideAll();">
			<i class="material-icons">close</i>
		</div>
		<div class="popup-about-div white-text">
			<b>F L I P F L O P  </b> A r t w o r k<br/><br/>
			Do am he horrible distance marriage so although. Afraid assure square so happen mr an before. His many same been well can high that. Forfeited did law eagerness allowance improving assurance bed. Had saw put seven joy short first. Pronounce so enjoyment my resembled in forfeited sportsman. Which vexed did began son abode short may. Interested astonished he at cultivated or me. Nor brought one invited she produce her. <br/><br/>

			He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.  <br/><br/>

			At every tiled on ye defer do. No attention suspected oh difficult. Fond his say old meet cold find come whom. The sir park sake bred. Wonder matter now can estate esteem assure fat roused. Am performed on existence as discourse is. Pleasure friendly at marriage blessing or.  <br/><br/>

			Do am he horrible distance marriage so although. Afraid assure square so happen mr an before. His many same been well can high that. Forfeited did law eagerness allowance improving assurance bed. Had saw put seven joy short first. Pronounce so enjoyment my resembled in forfeited sportsman. Which vexed did began son abode short may. Interested astonished he at cultivated or me. Nor brought one invited she produce her. <br/><br/>

			He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.  <br/><br/>

			At every tiled on ye defer do. No attention suspected oh difficult. Fond his say old meet cold find come whom. The sir park sake bred. Wonder matter now can estate esteem assure fat roused. Am performed on existence as discourse is. Pleasure friendly at marriage blessing or.  <br/><br/>

			Do am he horrible distance marriage so although. Afraid assure square so happen mr an before. His many same been well can high that. Forfeited did law eagerness allowance improving assurance bed. Had saw put seven joy short first. Pronounce so enjoyment my resembled in forfeited sportsman. Which vexed did began son abode short may. Interested astonished he at cultivated or me. Nor brought one invited she produce her. <br/><br/>

			He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.  <br/><br/>

			At every tiled on ye defer do. No attention suspected oh difficult. Fond his say old meet cold find come whom. The sir park sake bred. Wonder matter now can estate esteem assure fat roused. Am performed on existence as discourse is. Pleasure friendly at marriage blessing or.  <br/><br/>

		</div>
	</div>

	<!-- Always on top header -->
	<header id="header-fixed">
		<div class="header-social-icons">
			<a href="#"><i class="fa fa-behance"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-snapchat"></i></a>
		</div>
		<!-- Show if user is not connected -->
		<div class="header-buttons">
			<button class="header-buttons-button login-button-bg" type="button" onclick="openLogIn();">
				<div class="header-buttons-text">log in</div>
			</button>
			<button class="header-buttons-button signin-button-bg" type="button" onclick="openSignIn();">
				<div class="header-buttons-text">new user</div>
			</button>
		</div>

		<!-- Show if user is connected -->
		<div class="header-buttons">
			<span>
				<b>Anas</b>Ait Assas
			</span>
			<a class="btn-floating white red-text btn-floating-header floating-user">
			</a>
			<a class="btn-floating white red-text btn-floating-header floating-cart">
				<span class="button-notification"></span>
			</a>
			<button class="header-buttons-button" type="button" style="padding-left:4px;">
				<div class="header-buttons-text">log out</div>
			</button>
		</div>
	</header>
	<!-- Section of menu -->
	<section id="header-menu">
		<div class="header-menu-in">
			<ul>
				<li>
					<a class="header-menu-link" onclick="#">CONTACT</a>
				</li>
				<li>
					<a>X</a>
				</li>
				<li>
					<a class="header-menu-link" onclick="#">ARTIST</a>
				</li>
				<li>
					<a>X</a>
				</li>
				<li>
					<a class="header-menu-link" onclick="openAbout();">FLIPFLOP</a>
				</li>
				<li>
					<a>X</a>
				</li>
				<li>
					<a class="header-menu-link" onclick="showSubMenu();">COLLECTION</a>
				</li>
			</ul>
		</div>
		<div class="header-menu-in" id="header-submenu">
			<ul>
				<li>
					<a class="header-menu-link" onclick="$('html, body').animate({scrollTop: $('#video').offset().top-38}, 500);">VIDEO(1)</a>
				</li>
				<li>
					<a>X</a>
				</li>
				<li>
					<a class="header-menu-link" onclick="$('html, body').animate({scrollTop: $('#wallpapers').offset().top-38}, 500);">WALLPAPER(20)</a>
				</li>
				<li>
					<a>X</a>
				</li>
				<li>
					<a class="header-menu-link" onclick="$('html, body').animate({scrollTop: $('#store').offset().top-38}, 500);">STORE(23)</a>
				</li>
			</ul>
		</div>
	</section>
	
	<!-- Section of the body's content -->
	<section id="page-body">

		<!-- Logo -->
		<div id="body-logo">
			<div id="logo"></div>
		</div>

		<!-- Slider -->
		<div id="body-slider">
			<div id="body-slider-in">
				<div><img src="assets/slider/1.jpg" /></div>
				<div><img src="assets/slider/3.jpg" /></div>
			</div>
		</div>

		<!-- Store -->
		<div id="store" class="section-in">
			<div class="section-header">
				<b>STORE</b> (23) <span class="section-header-desc"> Choose your product and buy it now.</span>
			</div>
			<!-- Store Grid-->
			<div class="store-grid" id="store-grid">
				<!-- Store Item with detail example -->
				<div class="store-grid-item" id="store-grid-item-1" onclick="showDetail(this);">
					<div class="popup-close popup-close-store" id="store-grid-item-1-close" onclick="event.stopPropagation();hideDetail(this);">
						<i class="material-icons">close</i>
					</div>
					<div class="store-grid-item-image" id="store-grid-item-1-image">
						<img alt="" title="" src="store/temp.jpg"/>
					</div>
					<div class="store-grid-item-detail" id="store-grid-item-1-detail">
						<div class="store-grid-item-fav">
						</div>
						<div class="store-grid-item-text">
							NAME
							<div class="store-grid-item-collection">
								COLLECTION #12
							</div>
						</div>
						<div class="store-grid-item-price">
							600
							<span class="store-grid-item-devis">
								MAD
							</span>
						</div>
						<hr class="store-grid-item-separator"/>
						<div class="store-grid-item-about">
							<div class="store-grid-item-about-title">About</div>
							Stuff About this artwork ...
						</div>

						<div class="store-grid-item-qte">
							<div class="store-grid-item-qte-title">Quantity</div>
							<div class="store-grid-item-qte-controls"><i class="material-icons">keyboard_arrow_left</i></div>
							<div class="store-grid-item-qte-number">1</div>
							<div class="store-grid-item-qte-controls"><i class="material-icons">keyboard_arrow_right</i></div>
						</div>

						<div class="store-grid-item-about">
							<div class="store-grid-item-about-title">SIZE(2)</div>
							<div class="store-grid-item-sizes">
								<p>
									<input checked class="with-gap red" name="size-1" type="radio" id="size-1-1"  />
									<label for="size-1-1">900 x 600 mm</label>
								</p>
								<p>
									<input class="with-gap red" name="size-1" type="radio" id="size-1-2"  />
									<label for="size-1-2">2200 x 900 mm</label>
								</p>
							</div>
							<div class="store-grid-item-size-img">
								<img src="store/sizes/size1-1.png" alt=""/>
							</div>
						</div>

						<div class="store-grid-item-about">
							<div class="store-grid-item-about-title">PAYMENTS/GUARANTEE</div>
							payment and guarantee ...
						</div>
						<hr class="store-grid-item-separator"/>

						<div class="store-grid-item-social" id="store-grid-item-1-social">
							<span class="store-grid-item-fb"></span>
							<span class="store-grid-item-twitter"></span>
							<span class="store-grid-item-share"></span>
						</div>
						<div class="store-grid-item-buy" id="store-grid-item-1-buy">
						</div>
					</div>
				</div>
				<!--  -->
				<div class="store-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="store-grid-item store-grid-item-large">
					<img alt="" title="" src="store/temp_large.jpg"/>
				</div>
				<div class="store-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="store-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
			</div>
		</div>

		<!-- WALLPAPERS -->
		<div id="wallpapers" class="section-in">
			<div class="section-header">
				<b>WALLPAPERS</b> (20) <span class="section-header-desc"> Download your favorite wallpaper <b>FOR FREE</b>.</span>
			</div>
			<div class="store-grid">
				<div class="wall-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="wall-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="wall-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="wall-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
				<div class="wall-grid-item">
					<img alt="" title="" src="store/temp.jpg"/>
				</div>
			</div>
		</div>

		<!-- VIDEO -->
		<div id="video" class="section-in">
			<div class="section-header">
				<b>VIDEO</b> (1) <span class="section-header-desc"> Watch your favorite video now.</span>
			</div>
				<!--<iframe width="960" height="500" src="https://www.youtube.com/embed/emGri7i8Y2Y?rel=0" frameborder="0" allowfullscreen></iframe>-->
				<div class="youtube-container">
					<div class="youtube-player" data-id="emGri7i8Y2Y"></div>
				</div>
		</div>
	</section>

	<!-- Floating action button -->

	<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 12px;">
		<a class="btn-floating btn-large red" id="bigbutton">
		</a>
		<ul>
		  <li><a class="btn-floating red" id="back-to-top" title="Back to Top" onclick="$('html, body').animate({scrollTop: 0}, 500);"><i class="material-icons">arrow_upward</i></a></li>
		  <li><a class="btn-floating red floating-user-white" title="Profile" ></a></li>
		  <li><a class="btn-floating red floating-cart-white" title="Cart" ><span class="button-notification white-outline"></span></a></li>
		</ul>
	</div>
	
	<!-- footer of the page-->
	<footer id="footer">
		<div id="footer-credits">
			Designed by Anas Ait Assas
		</div>
		<div id="footer-copyright">
			Copyright &copy; PANDART 2016
		</div>
	</footer>
	<script>
		(function() {
		var v = document.getElementsByClassName("youtube-player");
		for (var n = 0; n < v.length; n++) {
			var p = document.createElement("div");
			p.innerHTML = labnolThumb(v[n].dataset.id);
			p.onclick = labnolIframe;
			v[n].appendChild(p);
		}
		})();

		function labnolThumb(id) {
		return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/maxresdefault.jpg"><div class="play-button"></div>';
		}

		function labnolIframe() {
		var iframe = document.createElement("iframe");
		iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
		iframe.setAttribute("frameborder", "0");
		iframe.setAttribute("id", "youtube-iframe");
		this.parentNode.replaceChild(iframe, this);
		}
	</script>
</body>
</html>