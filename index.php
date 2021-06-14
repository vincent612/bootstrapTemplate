<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Bootstrap4 website</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
-	<link rel="stylesheet" type="text/css" href="style.css">



<style type="text/css">
	body{
		position: relative;
	}
</style>


</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img class="img-fluid" src="images/comradesplat.jpg" height="30" width="140" >
			</a>
			<span class="badge1 badge-pill badge-primary faa-bounce faa-fast animated" style="margin-left: 20px;">Comrades Platform</span>
			<button class="navbar-toggler" type="button" data-target="#navbarContent" data-toggle="collapse">
				<span class="fa fa-chevron-down faa-ring animated faa-wrench animated-hover"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="navbar-item active">
						<a class="nav-link faa-parent animated-hover" href="#">
							<span class="fa fa-fw fa-lg fa-home faa-tada faa-fast"></span>Home
						</a>
					</li>
					<li class="navbar-item">
						<a class="nav-link faa-parent animated-hover" href="#">
							<span class="fa fa-fw fa-lg fa-shopping-cart faa-tada faa-fast"></span>Buy/Sell
						</a>
					</li>
					<li class="navbar-item">
						<a class="nav-link faa-parent animated-hover" href="#">
							<span class="fa fa-fw fa-lg fa-quote-left faa-tada faa-fast" ></span>About Us
						</a>
					</li>
					<li class="navbar-item">
						<a class="nav-link faa-parent animated-hover" href="javascript:void(0)" data-toggle="modal" onclick="openLoginModal();">
							<span class="fa fa-fw fa-lg fa-quote-left faa-tada faa-fast" ></span>login/signup
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top: 20px;">
		<div class="row">
			<div class="col-xl-12 col-md-12 col-sm-12 col-xs-6">
				<div id="imgCarousel" class="carousel slide" data-interval="2000">
					<ol class="carousel-indicators">
						<li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#imgCarousel" data-slide-to="1"></li>

					</ol>
					<div class="carousel-inner" align="right" role="listbox">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/flash.jpg" class="d-block w-100">
									<div class="carousel-caption">
										<h3><a href="#">First</a></h3>
										<p>First image</p>
									</div>
								</div>
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/service2.jpg" class="d-block w-100">
									<div class="carousel-caption">
										<h3>Second</h3>
										<p>Second image</p>
									</div>
								</div>
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/lap.jpg"   class="d-block w-100">
									<div class="carousel-caption">
										<h3>third</h3>
										<p>third image</p>
									</div>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/fashion.jpg" class="d-block w-100">
									<div class="carousel-caption">
										<h3>First</h3>
										<p>First image</p>
									</div>
								</div>
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/bed2.jpg" class="d-block w-100">
									<div class="carousel-caption">
										<h3>Second</h3>
										<p>Second image</p>
									</div>
								</div>
								<div class="col-xl-4 col-md-4 col-sm-4 col-xs-2">
									<img src="images/bed2.jpg" class="d-block w-100">
									<div class="carousel-caption">
										<h3>third</h3>
										<p>third image</p>
									</div>
								</div>
							</div>	

						</div>
					</div>
					<a href="#imgCarousel" class="carousel-control-prev" data-slide="prev"><span class="fa fa-chevron-left"></span>
					</a>
					<a href="#imgCarousel" class="carousel-control-next" data-slide="next"><span class="fa fa-chevron-right"></span>
					</a>

				</div>


			</div>

		</div>
	</div>
	<div class="container-fluid bg-light" style="margin-top: 20px;">
		<div class="row">
			<div class="col-xl-2 col-md-12 col-sm-12">
				<button class="navbar-toggler" type="button" data-target="#listGroupContent" data-toggle="collapse">
				<span class="fa fa-chevron-down faa-ring animated faa-wrench animated-hover"></span>
			</button>
				<div class="list-group">
					<i class="list-group-item list-group-item-action flex-column">categories</i>
					<a href="#!" class="list-group-item list-group-item-action flex-column faa-parent animated-hover">
						Elecronics
					</a>
					<a href="#!" class="list-group-item list-group-item-action flex-column">
						Fashion
					</a>
					<a href="#!" class="list-group-item list-group-item-action flex-column">
						House
					</a>
					<a href="#!" class="list-group-item list-group-item-action flex-column">
						<span class="fa fa-fw fa-lg fa-users faa-tada faa-fast"></span>
						Services 
					</a>
					<a href="#!" class="list-group-item list-group-item-action flex-column faa-parent animated-hover">
						<span class="fa fa-fw fa-lg fa-book faa-tada faa-fast"></span>
						Academics
					</a>
					<a href="#!" class="list-group-item list-group-item-action flex-column faa-parent animated-hover">
						<span class="fa fa-fw fa-lg fa-newspaper-o faa-tada faa-fast"></span>
						Blog
					</a>

				</div>
			</div>
			<div class="col-xl-9 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
				<lead>Wondering where to get that good/service within your locale?,or you want to sell your product/service to the nearest buyer?
					worry no more! comrades platform is here for you.</lead>
					<div class="jumbotron">				
				<h1><span class="badge badge-pill badge-primary faa-flash faa-fast animated">new</span></h1>
				<img class="img-fluid" src="images/bed2.jpg" width="160" height="280" style="margin-left: 40px">
				<img class="img-fluid" src="images/fashion.jpg" width="160" height="280" style="margin-left: 40px">
				<img class="img-fluid" src="images/phone.jpg" width="160" height="280" style="margin-left: 40px">
			</div>
				</div>
		</div>
		
	</div>
	<div class="container-fluid bg-light" style="margin-top: 20px>
		<div class="row padding">
			<div class="col-sm-12">
				<div class="jumbotron">
			<h1><span class="badge badge-pill badge-primary">Electronics</span></h1>
			<img class="img-fluid" src="images/bed2.jpg" width="160" height="280" style="margin-left: 40px">
			<img class="img-fluid" src="images/fashion.jpg" width="160" height="280" style="margin-left: 40px">
		    <img class="img-fluid" src="images/phone.jpg" width="160" height="280" style="margin-left: 20px">
			</div>		
		</div>
		
	</div>
	



















<script src="bootstrap/bootstrap/js/bootstrap.js"</script>
		<script type="text/javascript">
		$(document).ready(function () {
			$('#imgCarousel').carousel();

		});
	</script>
	<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


</body>
</html>