<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifestyle</title>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="assets/css/offcanvas.min.css" rel="stylesheet">

    <!--Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">

	<!-- Header Section -->
	<header>
		<div class="container">
			<div class="top_ber">
				<div class="row">
					<div class="col-md-6">
						<div class="top_ber_left">
							Lates News Magazine.
						</div><!--top_ber_left-->
					</div><!--col-md-6-->
					<div class="col-md-6">
						<div class="top_ber_right">
							<div class="top-menu">
								<ul class="nav navbar-nav">
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
								</ul>
							</div><!--top-menu-->
						</div><!--top_ber_left-->
					</div><!--col-md-6-->
				</div><!--row-->
			</div><!--top_ber-->

			<div class="header-section">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<a  href="index.html"><img class="img-responsive" src="assets/img/logo.png" alt=""></a>
						</div><!--logo-->
					</div><!--col-md-3-->
				</div> <!--row-->
			</div><!--header-section-->

			<div class="menu_area">
				<div class="row">

					<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

							</div>
							<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
								<ul class="nav navbar-nav">
									<li class="hidden"><a href="#page-top"></a></li>
									<li><a class="page-scroll" href="/">Home</a></li>
									<li><a class="page-scroll" href="tech">Technology</a></li>
									<li><a class="page-scroll" href="lifestyle">Lifestyle</a></li>
									<li><a class="page-scroll" href="otomotif">Otomotif</a></li>
                  					<li><a class="page-scroll" href="pokemon">Pokemon</a></li>
									<li><a class="page-scroll" href="friends">Friends</a></li>
				
								</ul>
								<div class="pull-right">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input class="form-control" placeholder="Search" name="q" type="text">
											<div class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</nav>

				</div><!--row-->
			</div>
		</div><!-- /.container -->
	</header>

	<!-- Feature Category Section & sidebar -->
	<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
	<div class="container">   
		<div class="row">
		   	<div class="col-md-9">
		   		<div class="row">								 
					<div class="col-md-12">
						<div class="feature_news_item category_item">
                			<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[7]->img_url}}" alt="Chania">
									</div><!--item_img--> 
									<div class="item_title_date">
										<div class="news_item_title">
											<h1><a href="{{$index[7]->source_url}}">{{$index[7]->title}}</a></h1>
										</div><!--news_item_title-->
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content">{{$index[7]->description}}
							    </div><!--item_content-->

							</div><!--item-->               			 
            			</div><!--feature_news_item-->
					</div><!--col-md-6-->
				</div>		
				<div class="row">								 
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[6]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[6]->source_url}}">{{$index[6]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[6]->description}}
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
						
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[5]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[5]->source_url}}">{{$index[4]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[5]->description}}
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
					
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[4]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[4]->source_url}}">{{$index[4]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[4]->description}}
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
					
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[3]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[3]->source_url}}">{{$index[3]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[3]->description}}
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
					
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[2]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[2]->source_url}}">{{$index[2]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[2]->description}}
								</div>
							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
					
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[1]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[1]->source_url}}">{{$index[1]->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$index[1]->description}}
								</div>
							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->						 
				</div><!--row-->	
		   	</div><!--col-md-9-->
</section><!--feature_category_section-->
<footer class="footer_section section_wrapper section_wrapper" >
	
	<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	
	<div class="copyright-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
							Editor: Grahito Ardani Bimanta
					</div><!--col-xs-3-->
					<div class="col-md-6">
						<div class="copyright">
						© Copyright 2022 - Grahito Ardan Design by: <a href="https://uiCookies.com" title="uiCookies">uiCookies</a>
						</div>
					</div><!--col-xs-6-->
					<div class="col-md-3">
						GAB News
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--copyright-section-->
</footer>

</div> <!--main-wrapper-->
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/jquery.min.js"></script>

<!-- Owl carousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Theme Script File-->
<script src="assets/js/script.js"></script> 

<!-- Off Canvas Menu -->
<script src="assets/js/offcanvas.min.js"></script> 
   
</body>
</html>