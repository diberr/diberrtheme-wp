<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Diberr</title>
		<?php wp_head();?>
	</head>

  	<body>
		<header>
			<!-- nav bar -->
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-md-top px-md-5 py-lg-4">
				<div class="row">
					<div class="col-3">
						<a class="navbar-brand mx-md-5 pe-md-5" href="#">
							<img src="<?php echo get_theme_file_uri('assets/images/diberr-logo.png')?>" class="w-100 logo" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>

					<!-- Mobile Nav Start -->
					<div class="col-9">
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav mx-md-5 text-center txt-sm">
								<li class="nav-item me-md-4 active">
									<a class="nav-link pb-0" href="#">Home <span class="sr-only">(current)</span></a>
									<hr class="d-none d-md-block" />
								</li>
								<li class="nav-item me-md-4">
									<a class="nav-link pb-0" href="#">who we are</a>
									<hr class="d-none d-md-block" />
								</li>
								<li class="nav-item me-md-4">
									<a class="nav-link pb-0" href="#">what we do</a>
									<hr class="d-none d-md-block" />
								</li>
								<li class="nav-item me-md-4">
									<a class="nav-link pb-0" href="#">contact us </a>
									<hr class="d-none d-md-block" />
								</li>
							</ul>
							<div class="px-5 text-start">
								<span class="d-none d-md-inline">
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
							</div>
						</div>
					</div>
					<!-- Mobile Nav End -->
				</div>
			</nav>
		</header>