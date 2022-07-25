<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon</title>
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
        <style>
            body {
    background-color:rgb(242, 241, 241);
    color: white;
    margin: 0;
    font-family: rubik;
}

.container {
    padding: 40px;
    margin: 0 auto;
}

h1 {
    text-transform: uppercase;
    text-align: center;
    font-size: 54px;
    color: black;
}

#pokedex {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 20px;
    padding-inline-start: 0;
}

.card {
    list-style: none;
    padding: 40px;
    background-color: #ffffff;
    color: #222;
  text-align: center;
}

.card:hover {
    animation: bounce 0.5s linear;
}

.card-title {
    text-transform: capitalize;
    margin-bottom: 0px;
    font-size: 32px;
    font-weight: normal;
}
.card-subtitle {
    margin-top: 5px;
    color: #666;
    font-weight: lighter;
}

.card-image {
    height: 90px;
}

@keyframes bounce {
    20% {
        transform: translateY(-6px);
    }
    40% {
        transform: translateY(0px);
    }

    80% {
        transform: translateY(-2px);
    }
    100% {
        transform: translateY(0);
    }
}
        </style>
        <link
            href="https://fonts.googleapis.com/css?family=Rubik&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="container">
            <h1>Pokemon</h1>
            <ul id="pokedex"></ul>
        </div>
        <script>
            const pokedex = document.getElementById('pokedex');

const fetchPokemon = () => {
    const promises = [];
    for (let i = 1; i <= 150; i++) {
        const url = `https://pokeapi.co/api/v2/pokemon/${i}`;
        promises.push(fetch(url).then((res) => res.json()));
    }
    Promise.all(promises).then((results) => {
        const pokemon = results.map((result) => ({
            name: result.name,
            image1: result.sprites['front_default'],
            image2: result.sprites['back_default'],
            type: result.types.map((type) => type.type.name).join(', '),
            skill: result.moves[0].move.name,
            id: result.id
        }));
        displayPokemon(pokemon);
    });
};

const displayPokemon = (pokemon) => {
    console.log(pokemon);
    const pokemonHTMLString = pokemon
        .map(
            (pokeman) => `
        <li class="card">
            <img class="card-image" src="${pokeman.image1}"/>
            <img class="card-image" src="${pokeman.image2}"/>
            <h2 class="card-title">${pokeman.id}. ${pokeman.name}</h2>
            <p class="card-subtitle">Type: ${pokeman.type}</p>
            <p class="card-subtitle">skill: ${pokeman.skill}</p>
        </li>
    `
        )
        .join('');
    pokedex.innerHTML = pokemonHTMLString;
};

fetchPokemon();

        </script>
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
