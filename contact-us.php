<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Контакты костанайского центра помощи предпринимателям</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
	<style>
        .theme-inner-banner {
    border-bottom: 1px solid #f2f2f2;
    margin-bottom: 50px;
}
        .theme-inner-banner .bg .opacity {
    background: rgb(244, 246, 248);
    text-align: center;
    padding: 75px 0 85px 0;
}</style>		
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>


			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-menu-two">
			<?php include('menu.php'); ?>
			</header> <!-- /.theme-menu-two -->

			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner">
				<div class="bg">
					<div class="opacity">
						<div class="container">
							<h2>Свяжитесь с нами</h2>
						</div>
					</div> <!-- /.opacity -->
				</div> <!-- /.bg -->
				<div class="container">
					<div class="clearfix">
						<ul class="float-left">
							<li><a href="/" class="tran3s">Главная</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
							<li>Контакты</li>
						</ul>
					</div>
				</div>
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Contact Address 
			============================================== 
			-->
			<div class="contact-us-top-content container">
				<p>Спасибо за проявленный интерес к нашей компании. Мы можем и хотим вам помочь потому что можем. Свяжитесь с нами.</p>
				<div class="row">
					<div class="col-sm-4">
						<div class="single-address">
							<i class="flaticon-map"></i>
							<h3>Находимся</h3>
							<p>г.Костанай ул. Каирбекова 85</p>
						</div>
					</div> <!-- /.col- -->
					<div class="col-sm-4">
						<div class="single-address">
							<i class="flaticon-email"></i>
							<h3>Телефон &amp; Email</h3>
							<p>+7 (702) 857-22-45<br>kcpp@list.ru</p>
						</div>
					</div> <!-- /.col- -->
					<div class="col-sm-4">
						<div class="single-address">
							<i class="flaticon-share-1"></i>
							<h3>Давайте дружить</h3>
							<ul>
								<li><a href="https://vk.com/10kcpp" target="_blank" class="tran3s"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/rcpp__kosta/" target="_blank" class="tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.contact-us-top-content -->


			<!-- 
			=============================================
				Contact Form
			============================================== 
			-->
			<div class="contact-us-page">
				<div class="container">
					<div class="col-lg-5 col-md-6 col-xs-12">
						<h2>На карте</h2>
						<div id="google-map-area">
							<div class="google-map" id="contact-google-map" data-map-lat="53.2123331" data-map-lng="63.6439135" data-icon-path="images/logo/map.png" data-map-title="Find Map" data-map-zoom="10"></div>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-xs-12">
						<div class="contact-form-wrapper">
							<h2>Форма для связи</h2>
							<form action="inc/sendemail.php" class="form-validation" autocomplete="off">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" placeholder="Фамилия*" name="Fname">
									</div>
									<div class="col-sm-6">
										<input type="text" placeholder="Имя*" name="Lname">
									</div>
								</div>
								<input type="text" placeholder="Телефон или email*" name="email">
								<textarea placeholder="Сообщение*" name="message"></textarea>
								<button class="tran3s p-bg-color hvr-float-shadow">Отправить</button>
							</form>
						</div>

						<!-- Contact Form Validation Markup -->
						<!-- Contact alert -->
						<div class="alert-wrapper" id="alert-success">
							<div id="success">
								<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
								<div class="wrapper">
					               	<p>Your message was sent successfully.</p>
					             </div>
					        </div>
					    </div> <!-- End of .alert-wrapper -->
					    <div class="alert-wrapper" id="alert-error">
					        <div id="error">
					           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
					           	<div class="wrapper">
					               	<p>Sorry!Something Went Wrong.</p>
					            </div>
					        </div>
					    </div> <!-- End of .alert-wrapper -->
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-page -->
			
			

	

			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			      <?php include($_SERVER['DOCUMENT_ROOT'].'/footerpage.php'); ?>


	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>





		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<!-- Mega menu  -->
		<script type="text/javascript" src="vendor/Menuzord/js/menuzord.js"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
		
		<!-- WOW js -->
		<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script type="text/javascript" src="vendor/jquery.appear.js"></script>
		<script type="text/javascript" src="vendor/jquery.countTo.js"></script>
		<!-- fancy box -->
		<script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
		
		<!-- js count to -->
		<script type="text/javascript" src="vendor/jquery.appear.js"></script>
		<script type="text/javascript" src="vendor/jquery.countTo.js"></script>
		<!-- MixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Google map js -->
		<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&callback=gMapHome" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>

		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>