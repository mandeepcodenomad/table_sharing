<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Blank document</title>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
	jssor_slider1_starter = function (containerId) {
		
	var _CaptionTransitions = [];
	_CaptionTransitions["L"] = { $Duration: 900, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
	_CaptionTransitions["R"] = { $Duration: 900, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
	_CaptionTransitions["T"] = { $Duration: 900, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
	_CaptionTransitions["B"] = { $Duration: 900, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
	_CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
	_CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
	_CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
	_CaptionTransitions["RTTL|BR"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };
	_CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
	_CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
	_CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
	var options = {
	$FillMode: 2,
	$AutoPlay: true,
	$AutoPlayInterval: 4000,
	$PauseOnHover: 1,
	$ArrowKeyNavigation: true,
	$SlideEasing: $JssorEasing$.$EaseOutQuint,
	$SlideDuration: 1200,
	$MinDragOffsetToSlide: 20,
	$SlideSpacing: 0,
	$DisplayPieces: 1,
	$ParkingPosition: 0,
	$UISearchMode: 1,
	$PlayOrientation: 1,
	$DragOrientation: 1,
	$CaptionSliderOptions: {
	$Class: $JssorCaptionSlider$,
	$CaptionTransitions: _CaptionTransitions,
	$PlayInMode: 1,
	$PlayOutMode: 3
	},
	$BulletNavigatorOptions: {
	$Class: $JssorBulletNavigator$,
	$ChanceToShow: 2,
	$AutoCenter: 1,
	$Steps: 1,
	$Lanes: 1,
	$SpacingX: 8,
	$SpacingY: 8,
	$Orientation: 1
	},
	$ArrowNavigatorOptions: {
	$Class: $JssorArrowNavigator$,
	$ChanceToShow: 1,
	$AutoCenter: 2,
	$Steps: 1
	}
	};
	var jssor_slider1 = new $JssorSlider$(containerId, options);
	function ScaleSlider() {
	var bodyWidth = document.body.clientWidth;
	if (bodyWidth)
	jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
	else
	$JssorUtils$.$Delay(ScaleSlider, 30);
	}
	ScaleSlider();
	$JssorUtils$.$AddEvent(window, "load", ScaleSlider);
	if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
	$JssorUtils$.$OnWindowResize(window, ScaleSlider);
	}
	};
</script>
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="logo_outer col-xs-12">
				<a href="index.php">
					<img src="images/logo.png"/>
				</a>
			</div>
		</header>
		
		<!-- Slider code-->
		<div class="col-xs-12">
		<div id="slider1_container" class="slider_container">
			<div u="loading" class="loading">
				<div class="shade"></div>
				<div class="loader_gif"></div>
			</div>
			<div u="slides" class="main_slider">
				<div><img u="image" src="slider/1.jpg" /></div>
				<div><img u="image" src="slider/1.jpg" /></div>
			</div>

			<div u="navigator" class="jssorb21 navigator">
				<div u="prototype" class="dots"></div>
			</div>
			<span u="arrowleft" class="jssora21l left"></span>
			<span u="arrowright" class="jssora21r right"></span>
		</div>
		<script> jssor_slider1_starter('slider1_container'); </script>
		</div>
		<!-- Slider code-->
		
		<!--Forms code start here-->
		
		<div class="col-lg-12 form_out">
			<div class="l_from">
				<div class="form_inner_outer">
				
					<div class="col-sm-12 frmhead">
						<h1>
							Find  a table
						</h1>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
						<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span><img src="images/bkfst.png"/>Breakfast</span></button>
						</div>
						<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span><img src="images/lun.png"/>Lunch</span></button>
						</div>
						<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span><img src="images/dinner.png"/>Dinner</span></button>
						</div>
						</div>
					</div>

					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/cat.png"/>Catagory
						</span>
						<input type="text" class="form-control" placeholder="Catagory" aria-describedby="basic-addon1">
						</div>
					</div>
					
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/kt_type.png"/>Kitchen types
						</span>
						<input type="text" class="form-control" placeholder="Kitchen types" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/dcode.png"/>Dress code
						</span>
						<input type="text" class="form-control" placeholder="Dress Code" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/location.png"/>Location
						</span>
						<input type="text" class="form-control" placeholder="Location" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/prc.png"/>Class of food
						</span>
						
						<div class="pr">
							<div class="low">$</div>
							<div class="min">$$</div>
							<div class="high">$$$</div>
						</div>
						
						</div>
					</div>
					
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/prc.png"/>Class of food
						</span>
						
						<div class="pr">
							<div class="col-sm-6">$</div>
							<div class="col-sm-6">$$</div>
						</div>
						
						</div>
					</div>

					<div class="col-sm-12 fld_o">
						<div class="radio">
						<label><input type="radio" name="optradio">Option 1</label>
						</div>
						
						<div class="radio">
						<label><input type="radio" name="optradio">Option 2</label>
						</div>
					
					</div>
					
					
					
					<div class="col-sm-12 fld_o">
					<button type="button" class="btn btn-primary sub_bt">Submit</button>
					</div>
				</div>
			</div>
			
			<div class="r_from">
				<div class="form_inner_outer">
				
					<div class="col-sm-12 frmhead">
						<h1>
							Find  a table
						</h1>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
							<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span><img src="images/bkfst.png"/>Breakfast</span>
							</button>
							</div>
							<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span><img src="images/lun.png"/>Lunch</span>
							</button>
							</div>
							<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span><img src="images/dinner.png"/>Dinner</span>
							</button>
							</div>
						</div>
					</div>

					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/cat.png"/>Catagory
						</span>
						<input type="text" class="form-control" placeholder="Catagory" aria-describedby="basic-addon1">
						</div>
					</div>
					
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/kt_type.png"/>Kitchen types
						</span>
						<input type="text" class="form-control" placeholder="Kitchen types" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-sm-12 fld_o">
						<div class="input-group">
						<span class="input-group-addon labl" id="basic-addon1">
						<img src="images/location.png"/>Location
						</span>
						<input type="text" class="form-control" placeholder="Location" aria-describedby="basic-addon1">
						</div>
					</div>
					
					
					
					<div class="col-sm-12 fld_o">
						<div class="">
							<button type="button" class="btn btn-primary sub_bt">Submit</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!---->
		
		<footer class="col-lg-12">
			<div class="col-md-9 foo_inner">
				<div class="col-md-3">
					<h1 class="foohd">Navigation</h1>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h1 class="foohd">For Members</h1>
					<ul>
						<li><a href="#">Sign In</a></li>
						<li><a href="#">Promotions</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					
					<h1 class="foohd">Follow us</h1>
					<ul>
						<li><a href="#"><span class="tw social"></span>Twitter</a></li>
						<li><a href="#"><span class="fb social"></span>Facebook</a></li>
						<li><a href="#"><span class="rss social"></span>RSS</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					
					<h1 class="foohd">Our Location</h1>
					<div class="address"> LOREM LPSUM IS SIMPLI DUMMY TEXT OF THE PRINTING AND TYPING INDUSTRY LOREM LPSUM HAS BEEN THE INDUSTRY STANDARD DUMMY TEXT </div>
				</div>
				<div class="clear"></div>
				<div class="col-md-12">
					<span class="cp">Sample dummy 2015 All Right Reserved</span>
				</div>
			</div>
			
			<script type="text/javascript" src="js/bootstrap.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
			<script type="text/javascript" src="js/custom.js"></script>
		</footer>
	</div>
</body>

</html>
