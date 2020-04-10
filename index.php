<?php
include('inc/config.php');
$sql = "SELECT id, confirmed, death, recovered FROM coronav WHERE id = 1";
$qu = mysqli_query($con,$sql);
$q = mysqli_fetch_row($qu);
$confirmed = $q[1];
$death = $q[2];
$reco = $q[3];
$date = date('d_m_Y');
session_start();
session_destroy();
unset($_SESSION['main']);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>coronaVirus algeria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body dir="rtl" style='display:block !important;'>
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-6">
									<div id="colorlib-logo" style="float:left;"><a href="index.php">coronaVirus<span>algeria</span></a></div>
								</div>
								<div class="col-md-3">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">3030</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">none</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<div class="menu-1">
								<ul>
									<li class="active"><a href="<?php echo $_SERVER['PHP_SELF']?>">الرئيسة</a></li>
									<li><a href="contact.php">المراسلة</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_6.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>صحتك<strong> هي <br>الأولى</strong></h1>
									<h2>هل تعتقد أنك تعرضت إلى COVID-19 Coronavirus ولديك أعراض؟</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="inc/main.php">إبدأ الفحص</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_5.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>نحن نساعدك <strong>في العثور على أفضل فحص</strong></h1>
									<h2>, أبقى يقظا ؟</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="inc/main.php">إبدأ الفحص</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
									<h2>خذ الاختبار للرد كمواطن  حسب أعراضك.</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="inc/main.php">إبدأ الفحص</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="colorlib-counter" class="colorlib-counters">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-push-2 counter-wrap">
					<div class="row">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="desc">
								<p class="wrap">
									<span class="icon"><i class="flaticon-healthy"></i></span>
									<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $confirmed;?>" data-speed="5000" data-refresh-interval="50"></span>
								</p>
								<span class="colorlib-counter-label">حالات مؤكدة</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="desc">
								<p class="wrap">
									<span class="icon"><i class="flaticon-hospital"></i></span>
									<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $death;?>" data-speed="5000" data-refresh-interval="50"></span>
								</p>
								<span class="colorlib-counter-label">موتى</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="desc">
								<p class="wrap">
									<span class="icon"><i class="flaticon-healthy-1"></i></span>
									<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $reco;?>" data-speed="5000" data-refresh-interval="50"></span>
								</p>
								<span class="colorlib-counter-label">الحالات المتعافية</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box" style='position: relative;top: 0;'>
					<h1 style="color :#3d97e8;">نصائح</h1>
					<p style="font-size:30px;">كيف تحمي نفسك والآخرين بشكل يومي؟</p>
				</div>
				<div class="col-md-6 col-md-pull-6 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/images.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					اغسل يديك بانتظام
					</p></li>
					  </ul>	
				  </div>
				  <div class="col-md-6 col-md-pull-6 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/cough.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					إحمل المنديل معك عند العطس 
					</p></li>
					  </ul>	
				  </div>
				  <div class="col-md-7 col-md-pull-1 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/wave.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					التحية بدون مصافحة
					</p></li>
					  </ul>	
				  </div>
				  <div class="col-md-7 col-md-pull-1 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/ti.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					إستخدم المنديل للضرورة و رميه في سلة المهملات بعد إستعماله
					</p></li>
					  </ul>	
				  </div>
				  <div class="col-md-7 col-md-pull-1 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/mask.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					إرتد قناعا إذا كنت مريضا أو إرتداء القناع من أجل الوقاية
					</p></li>
					  </ul>	
				  </div>
				  <div class="col-md-7 col-md-pull-1 animate-box">
					  <ul style='list-style:none; display:flex;'>
					  
						  <li><img src="images/house.svg" alt="wash"></li>
						  <li>
					<p style='margin-right:20px; font-weight:bold; font-size:20px;'>
					ابق في المنزل ، تجنب الاتصال بالآخرين. ينشر بعض الناس الفيروس دون الشعور بالأعراض.
					</p></li>
					  </ul>	
                  </div>
               </div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2 style="cursor:pointer;">coronaVirus algeria</h2>
					<p style="font-size:20px;">أجب عن أسئلة مساعدنا إذا كنت تعتقد أن لديك أعراضًا أو تعرضت للفيروس.</p>
					<p><a class="btn btn-primary btn-lg btn-learn" href="inc/main.php">إبدأ الفحص</a></p>
				</div>
			</div>
	</div>
<footer class="page-footer font-small blue" id='footer'>
<div class="footer-copyright text-center py-3">copyright &copy;
  <script>document.write(new Date().getFullYear());</script>
  <a href="~#">elhousseyn arab</a>
</div>

</footer>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/sticky-kit.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function(){
			$('#bn').click(function(){
				setTimeout("window.location.href ='test'",0000);
			});
		});
	</script>

	</body>
</html>

