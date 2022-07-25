<?php
$sumber = 'http://192.168.119.157:8000/api/getPost/';
$konten = file_get_contents($sumber);
$data = json_decode($konten,true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friends</title>
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
  <style>
	.container {
    padding: 40px;
    margin: 0 auto;
}
	#pokedex {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 20px;
    padding-inline-start: 0;
}
	.card {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.col-3{
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  padding-bottom: 30px;
}
.mt-2 {
  margin-top: 0.5rem !important;
}
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.justify-content-center {
  -webkit-box-pack: center !important;
  -webkit-justify-content: center !important;
      -ms-flex-pack: center !important;
          justify-content: center !important;
}
.card:hover {
    animation: bounce 0.5s linear;
}

.card-title {
    text-transform: capitalize;
    margin-bottom: 0px;
    font-size: 15px;
    font-weight: normal;
}
.card-subtitle {
    margin-top: 5px;
    color: #666;
    font-weight: lighter;
}

.card-image {
    height: 180px;
}
  </style>
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

<body>
	<div class="row justify-content-center">
		<?php foreach ($data as $row) { ?>
		<div class="col-4 mt-2">
			<div class="card shadow-lg" style="width: 18rem;">
				<img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a></h5>
					
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>
</body>
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