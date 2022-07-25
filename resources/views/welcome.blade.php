<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAB News</title>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
	 <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

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
<body>
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
	    </div><!-- /.container -->   

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
		<!-- .navbar -->
	</header>

    <!-- Feature Carousel Section -->
    <section id="feature_news_section" class="feature_news_section section_wrapper">
	<div class="container">   
	    <div class="row">
	    	<div class="col-md-6">
	    		<div class="feature_news_carousel">
					<div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
					    <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">					    
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[7]->img_url}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[7]->source_url}}">{{$index[7]->title}}.</a></h2>
										</div>
										<div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div> <!--item_title_date-->
								</div>	<!--item_wrapper-->
							    <div class="item_content">{{$index[7]->description}}</div>

							</div><!--feature_news_item-->

							<div class="item feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[9]->img_url}}" alt="Chania">
									</div> <!--item_img--> 
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="#">{{$index[9]->title}}</a></h2>
										</div>
                    <div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div> <!--item_title_date-->
								</div> <!--item_wrapper-->	
								
								<div class="item_content">{{$index[9]->description}}
								</div>

							</div><!--feature_news_item-->
							 

					  		<!-- Left and right controls -->
							<div class="control-wrapper">
								<a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
								<a class="right carousel-control" href="#featured-news-carousal" role="button" data-slide="next">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</div>
						</div><!--carousel-inner-->
	    			</div><!--carousel-->
	    		</div><!--feature_news_carousel-->
	    	</div><!--col-md-6-->
	    	
	    	<div class="col-md-6">
	    		<div class="feature_news_static">
		    		<div class="row">								 
						<div class="col-md-6">
							<div class="feature_news_item">
	                			<div class="item active">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{$index[10]->img_url}}" alt="Chania">
										</div> <!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h2><a href="single.html">{{$index[10]->title}}</a></h2>
											</div>
                                            <div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
										</div><!--item_title_date-->
									</div> <!--item_wrapper-->
								    <div class="item_content">{{$index[10]->description}} 
								    </div>

								</div><!--item-->               			 
	            			</div><!--feature_news_item-->
						</div>
						
						<div class="col-md-6">
							<div class="feature_news_item">
	                			<div class="item active">
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
						</div><!--col-xs-6-->
					</div><!--row-->
	    		</div><!--feature_news_static-->
	    	</div><!--col-md-6-->
	    </div><!--row-->
	</div><!--container-->   	
</section><!--feature_news_section-->

    <!-- Feature Category Section & sidebar -->
    <section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container">   
		<div class="row">
		   	<div class="col-md-9">
		   		<div class="category_layout">
			   		<div class="item_caregory red"><h2><a href="tech">Technology</a></h2></div>
						<div class="row">
				   			<div class="col-md-7">
								<div class="item feature_news_item">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{$index[1]->img_url}}" alt="Chania">
										</div><!--item_img--> 
										<div class="item_title_date">
											<div class="news_item_title">
												<h2><a href="{{$index[1]->source_url}}">{{$index[1]->title}}</a></h2>
											</div><!--news_item_title-->
                                            <div class="item_meta}"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->	
								    <div class="item_content">{{$index[1]->description}}
								    </div><!--item_content-->

								</div><!--feature_news_item-->
				   			</div><!--col-md-7-->
				   		</div><!--row-->
			   		</div><!--category_layout-->

		   		<div class="category_layout">
		   			<div class="item_caregory blue"><h2><a href="lifestyle">lifestyle</a></h2></div>
					<div class="row">
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[6]->img_url}}" alt="Chania">
									</div><!--item_img-->  
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[6]->source_url}}">{{$index[6]->title}}</a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->	
							    <div class="item_content">{{$index[6]->description}}
							    </div>

							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->
			   		</div><!--row-->
		   		</div><!--category_layout-->

		   		<div class="category_layout">
		   			<div class="item_caregory teal"><h2><a href="otomotif">Otomotif</a></h2></div>
					<div class="row">
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{$index[100]->img_url}}" alt="Chania">
									</div><!--item_img-->  
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{$index[100]->source_url}}">{{$index[100]->title}}</a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->	
							    <div class="item_content">{{$index[100]->description}}

							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->
			   		</div><!--row-->
		   		</div><!--category_layout-->
		   		
		   		<div id="more_news_item" class="more_news_item">
					<div class="more_news_heading"><h2><a href="#">More News</a></h2></div>
					<div class="row">
						<div class="col-md-4">
							<div class="feature_news_item">
	                			<div class="item">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{$index[9]->img_url}}" alt="Chania">
										</div><!--item_img--> 
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="#">{{$index[9]->title}}</a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="{{$index[9]->source_url}}">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{{$index[9]->description}} 
								    </div><!--item_content-->

								</div><!--item-->               			 
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->
							
						<div class="col-md-4">
							<div class="feature_news_item">
	                			<div class="item active">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{$index[11]->img_url}}" alt="Chania">
										</div><!--item_img--> 
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="#">{{$index[11]->title}}</a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="{{$index[11]->source_url}}">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{{$index[11]->description}}   
								    </div><!--item_content-->

								</div><!--item-->               			 
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->

						<div class="col-md-4">
							<div class="feature_news_item">
	                			<div class="item active">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{$index[240]->img_url}}" alt="Chania">
										</div><!--item_img--> 
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="#">{{$index[240]->title}}</a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="{{$index[240]->source_url}}">23Jul-2022,</a> by:<a href="#">Grahito</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{{$index[240]->description}} 
								    </div><!--item_content-->

								</div><!--item-->               			 
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->
					</div><!--row-->	
				</div><!--more_news_item-->	
		   	</div><!--col-md-9-->
			</div>
		</div>	   	
</section><!--feature_category_section-->

    <!-- Footer Section -->
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