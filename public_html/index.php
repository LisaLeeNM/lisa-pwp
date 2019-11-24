<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>

	<!-- CSS -->
	<link rel="stylesheet" href="style.css"/>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
			  crossorigin="anonymous"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Your JavaScript Form Validator -- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/aab9846fb7.js" crossorigin="anonymous"></script>

	<!-- Icons -->
	<i class="fab fa-github"></i>
	<i class="fab fa-linkedin"></i>

	<!-- Title -->
	<title>Lisa Lee Web Design</title>
</head>
<body class="mb-0 pb-0">

<!-- NAV BAR -->
<header>
	<div class="container pt-3">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Lisa Lee | Web Design</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">about</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>

<!-- ABOUT -->
<section class="py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<img src="documentation/lisa_image3.jpg" class="img-fluid mx-auto d-block" alt="lisa lee drawn image" width="1089"
					  height="870">
			</div>
		</div>
		<div class="col-md-9">
			<h1>hello!</h1>
			<p>I'm Lisa, owner and developer of a boutique web development shop. I enjoy collaborating with clients to help uncover the story of their passion that is their business.</p>
		</div>
	</div>
</section>

<!-- ABOUT -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="jumbotron">
					<h1 class="display-4">About</h1>
					<hr class="my-4">
					<p>Congue quisque egestas diam in arcu. Leo a diam sollicitudin tempor. Aenean et tortor at risus viverra adipiscing at in. Quis blandit turpis cursus in hac habitasse platea dictumst. Sit amet tellus cras adipiscing enim. Sagittis vitae et leo duis ut diam quam nulla porttitor. Lacinia at quis risus sed vulputate odio ut enim. Pharetra massa massa ultricies mi quis. Ut morbi tincidunt augue interdum velit euismod. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien.</p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- PORTFOLIO 1 -->
<div class="accordion" id="accordionExample">
<h1>Portfolio</h1>
	<div class="card">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Crime-Property Value Capstone Project
				</button>
			</h2>
		</div>

		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				<img src="documentation/watercolor balls.jpg" class="img-fluid rounded-circle mb-4" alt="grayscale watercolor of spheres">

				Web application created with Kyla Bendt and Lindsay Atencio that uses a map API to display property values and crime incident reports in the City of Albuquerque. The intention behind this project is to allow people to find affordable homes in areas with low crimes.
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingTwo">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Drawing
				</button>
			</h2>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body">
				<img src="documentation/tree roots.jpg" class="img-fluid rounded-circle mb-4" alt="photo of tree roots from sandia foothills hike">

				With this portrait of an African woman, my intention was to portray her realistically and convey the life that she has lived - her past, present and future. "Hope", charcoal, 18" x 24".
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingThree">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Painting
				</button>
			</h2>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			<div class="card-body">
				<img src="documentation/slot canyon.jpg" class="img-fluid rounded-circle mb-4" alt="slot canyons">
				This collage uses a mix of photo realism, pop art, and silhouette. It is my attempt to capture how some may be thinking and feeling about the current state of our country. "Chaos", acrylic on canvas, 14" x 18".
			</div>
		</div>
	</div>
</div>



<!-- PORTFOLIO 2 -->
<section>
	<div class="container">
		<div class="row">
			<div class="col">

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<img src="documentation/tree roots.jpg" class="img-fluid rounded-circle mb-4" alt="photo of tree roots from sandia foothills hike">
				<div class="card mb-4">
					<div class="card-body">
						<p class="card-text">Dui faucibus in ornare quam. Sem et tortor consequat id porta nibh venenatis cras. Venenatis a condimentum vitae sapien pellentesque. Scelerisque eu ultrices vitae auctor eu. Enim sit amet venenatis urna. Massa vitae tortor condimentum lacinia quis vel eros. Arcu non sodales neque sodales ut etiam sit amet. Suspendisse potenti nullam ac tortor vitae purus faucibus. Dolor sit amet consectetur adipiscing elit ut aliquam. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<img src="documentation/watercolor balls.jpg" class="img-fluid rounded-circle mb-4" alt="grayscale watercolor of spheres">
				<div class="card mb-4">
					<div class="card-body">
						<p class="card-text">Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Amet tellus cras adipiscing enim eu turpis egestas. Eu mi bibendum neque egestas congue quisque egestas diam. Ac turpis egestas integer eget. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Morbi tristique senectus et netus et malesuada fames ac turpis. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Fringilla ut morbi tincidunt augue. Quis vel eros donec ac odio tempor orci.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<img src="documentation/slot canyon.jpg" class="img-fluid rounded-circle mb-4" alt="slot canyons">
				<div class="card mb-4">
					<div class="card-body">
						<p class="card-text">Enim nulla aliquet porttitor lacus luctus. Ac turpis egestas integer eget aliquet. Bibendum at varius vel pharetra. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Tortor pretium viverra suspendisse potenti nullam ac. Quam vulputate dignissim suspendisse in est ante in. In massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Pretium lectus quam id leo in. Aliquet eget sit amet tellus cras adipiscing enim eu turpis.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CONTACT FORM -->
<!-- <section class="py-5">
	<div class="container bg-secondary py-5">
		<div class="row">
			<div class="col-md-12">
			<form>
				<div class="form-group">
					<label for="exampleInputName">Full Name</label>
					<input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter full name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Message</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
</section> -->

<!-- CLASS EXAMPLE CONTACT FORM -->
<form id="lisa-lee-form" action="../php/" method="post">
	<div class="form-group">
		<label for="contactDemoName">Name <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="email" class="form-control" id="contactDemoEmail" name="contactDemoEmail" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoSubject">Subject</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="contactDemoSubject" name="contactDemoSubject" placeholder="Subject">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoMessage">Message <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-comment" aria-hidden="true"></i>
			</div>
			<textarea class="form-control" rows="5" id="contactDemoMessage" name="contactDemoMessage" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
		</div>
	</div>

	<!-- reCAPTCHA -->
	<div class="g-recaptcha" data-sitekey="6LeqKsIUAAAAAP6W9KsjaVjC_C3ib7n_spo4JYsb"></div>

	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>

<!--NEED THIS AT END OF FORM: empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>

<!-- FOOTER -->
<footer>
	<div class="container-fluid bg-dark text-light text-center py-5">
		<h6>Lisa Lee | Web Design</h6>
	</div>
</footer>
</body>
</html>