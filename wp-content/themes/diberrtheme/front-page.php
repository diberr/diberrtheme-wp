<?php get_header();?>
		<main>
			<div class="">
				<!-- Hero Section Start -->
				<section>
					<div class="position-relative h-100">
						<!-- <video width="100%" height="auto" autoplay muted loop>
							<source src="<?php echo get_theme_file_uri('assets/images/Network video.gif')?>" type="video/mp4" />
							Your browser does not support the video tag.
						</video> -->
						<img width="100%" height="auto" src="<?php echo get_theme_file_uri('assets/images/Network video.gif')?>" alt="">
						<div class="video-text">
							<h1> A Business <br /> solutions provider</h1>
							<p>we are all about breakthrough results.</p>
							<button class="watch mt-4">
								<i class="fa-regular fa-circle-play"></i> watch video
							</button>
						</div>
						<div class="scroll d-none d-md-block">
							<button class="scroll-btn">
								<i class="fa-solid fa-chevron-down"></i>
							</button>
						</div>
					</div>
				</section>
				<!-- Hero Section End -->

				<!-- About us section start -->
				<section>
					<div class="position-relative h-100 about-section">
						<img src="<?php echo get_theme_file_uri('assets/images/Mask Group 15.png')?>" alt="" class="w-100" />
						<div class="container about">
							<div>
								<div class="mb-0 mt-2 my-md-4">
									<svg class="align-text-top d-none d-md-inline" width="65" height="4" viewBox="0 0 65 4" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="65" height="4" rx="3.05319" fill="#38A2A5" />
									</svg>
									<svg class="d-inline-block d-md-none" width="32" height="2" viewBox="0 0 32 2" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="32" height="2" rx="3.05319" fill="#38A2A5" />
									</svg>
									<span>about us</span>
								</div>
								<p class="pe-0 px-md-0">
									At Diberr, we are all about breakthrough results-enabling
									individuals and organizations achieve remarkable performance
									levels by leveraging technology enabled solutions. <br />
									Diberr Solutions has been operating for over 15 years
									through its Strategic Business Units (SBUs).
								</p>
								<a href="" class="text-decoration-none"><i class="fa-solid fa-arrow-right-long me-2 fw-bolder"></i>
									learn more
								</a>
							</div>
						</div>
					</div>
				</section>
				<!-- About us section end -->
				
				<!-- Strategic business unit section start -->
				<section>
					<div>
						<div class="position-relative business-units_bg">
							<img src="<?php echo get_theme_file_uri('assets/images/Group 1.png');?>" alt="" class="w-100" />
							<div class="title">
								<svg class="d-none d-md-inline me-2" width="75" height="4" viewBox="0 0 75 4" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="75" height="4" rx="3.05319" fill="#38A2A5" />
								</svg>
								<svg class="d-inline-block d-md-none" width="32" height="2" viewBox="0 0 32 2" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="32" height="2" rx="3.05319" fill="#38A2A5" />
								</svg>
								<span> Our strategic Business units </span>
							</div>
							<div class="business-units container">
								<div class="d-flex gap-3 gap-md-5 justify-content-center">
									<div class="content">
										<img class="w-100 h-50 h-md-auto" src="<?php echo get_theme_file_uri('assets/images/Component 22 – 1.png');?>" alt="Card image cap"/>
											<p class="mb-0 mb-md-5">
												ADC grooms change agents that disrupt the statuesque and
												drives transformational growth in organizations.
											</p>
											<div class="px-2 pt-4 pb-0 pb-md-4 pt-md-5 px-md-4">
												<a href="#" class=""><i class="fa-solid fa-arrow-right-long text-white pe-2 pe-md-4"></i>
													visit agile digital college
												</a>
											</div>
									</div>
									<div class="content">
										<img class="w-100 h-50 h-md-auto" src="<?php echo get_theme_file_uri('assets/images/Component 23 – 1.png')?>" alt="Card image cap"/>

										<p class="mb-0">
										padiworks is a center hub for getting jobs done way better
										and faster. a collaborative work management software for
										high performance teams and organizations
										</p>
										<div class="px-2 pt-1 pb-md-3 pt-md-5 px-md-4">
										<a href="#" class="text-uppercase"
											><i
											class="fa-solid fa-arrow-right-long text-white pe-2 pe-md-4"
											></i>
											vist padiworks</a
										>
										</div>
									</div>
								</div>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</section>
				<!-- Strategic business unit section end -->

				<!-- Product Portfolio Section start -->
				<section>
					<div class="position-relative mx-auto">
						<img src="<?php echo get_theme_file_uri('assets/images/pexels-adrien-olichon-3137055.jpg');?>" alt="" class="d-none d-md-block w-100"/>
						<img src="<?php echo get_theme_file_uri('assets/images/pexels-adrien-olichon-3137055-mobile.jpg');?>" alt="" class="w-100 d-md-none"/>
						<div class="products-portfolio_header mb-md-5 px-5">
							<svg class="d-none d-md-inline me-2" width="75" height="4" viewBox="0 0 75 4" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="75" height="4" rx="3.05319" fill="#38A2A5" />
							</svg>
							<svg class="d-inline-block d-md-none" width="32" height="2" viewBox="0 0 32 2" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="2" rx="3.05319" fill="#38A2A5" />
							</svg>
							<h6 class="d-inline">Product portfolio</h6>
							<p class="d-block my-2 my-md-4 pe-5">
								Products that will change and develop your life for better.
							</p>
							<span class="py-md-5">see our products below</span>
						</div>
						<div class="container">
							<!-- carousel -->
							<div id="portfolioCarousel" class="carousel slide products-portfolio-carousel" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
									<!-- <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="bg-primary"></button>
									<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="bg-primary"></button> -->
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="d-flex mx-3">
											<div class="w-75 w-md-75">
												<div class="d-flex flex-column justify-content-center text-center carousel-content">
													<img src="<?php echo get_theme_file_uri('assets/images/CC-100.jpg')?>" alt="" class="w-75 w-md-50 rounded-circle mx-auto"/>
													<span class="pt-2 pt-md-5 pb-md-3">career clinic</span>
													<button class="rounded-5 px-2 p-0 p-md-2 text-uppercase fw-bold">
													view website
												</button>
												</div>
											</div>

											<div class="w-75 w-md-75">
												<div class="d-flex flex-column justify-content-center text-center carousel-content" >
												<img src="<?php echo get_theme_file_uri('assets/images/EH-100.jpg')?>" alt="" class="w-75 w-md-50 rounded-circle mx-auto"/>
												<span class="pt-2 pt-md-5 pb-md-3"> executors hub</span>
												<button class="rounded-5 px-2 p-0 p-md-2 text-uppercase fw-bold">
													view website
												</button>
												</div>
											</div>

											<div class="w-75 w-md-75">
												<div
												class="d-flex flex-column justify-content-center text-center carousel-content"
												>
												<img
													src="<?php echo get_theme_file_uri('assets/images/YGEP_1-100.jpg')?>"
													alt=""
													class="w-75 w-md-50 rounded-circle mx-auto"
												/>
												<span class="pt-2 pt-md-5 pb-md-3">
													young global expert program</span
												>

												<button
													class="rounded-5 px-2 p-0 p-md-2 my-2 mx-auto text-uppercase fw-bold"
												>
													view website
												</button>
												</div>
											</div>

											<div class="w-75 w-md-75">
												<div
												class="d-flex flex-column justify-content-center text-center carousel-content"
												>
												<img
													src="<?php echo get_theme_file_uri('assets/images/HOD-100.jpg')?>"
													alt=""
													class="w-75 w-md-50 rounded-circle mx-auto"
												/>
												<span class="pt-2 pt-md-5 pb-md-3">
													house of diberr</span
												>

												<button
													class="rounded-5 px-2 p-0 p-md-2 text-uppercase fw-bold"
												>
													view website
												</button>
												</div>
											</div>

											<div class="w-75 w-md-75">
												<div
												class="d-flex flex-column justify-content-center text-center carousel-content"
												>
												<img
													src="<?php echo get_theme_file_uri('assets/images/RS-100.jpg')?>"
													alt=""
													class="w-75 w-md-50 rounded-circle mx-auto"
												/>
												<span class="pt-2 pt-md-5 pb-md-3">
													results series</span
												>

												<button
													class="rounded-5 px-2 p-0 p-md-2 text-uppercase fw-bold"
												>
													view website
												</button>
												</div>
											</div>
										</div>
									</div>
									<!-- for more carousel content -->
									<!-- <div class="carousel-item"></div>
									<div class="carousel-item"></div> -->
								</div>
								<button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next carousel-btn" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<!-- end -->
					</div>
				</section>
				<!-- Product Portfolio Section end -->
			
				<section>
					<div class="position-relative">
						<img src="<?php echo get_theme_file_uri('assets/images/Component 21 – 1.png')?>" alt="" class="excutives-bg"/>
						<div class="container executives">
							<div class="mt-5 mb-2 executives_header pe-3">
								<svg class="d-none d-md-inline me-2" width="75" height="4" viewBox="0 0 75 4" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="75" height="4" rx="3.05319" fill="#38A2A5" />
								</svg>
								<svg class="d-inline-block d-md-none" width="32" height="2" viewBox="0 0 32 2" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="32" height="2" rx="3.05319" fill="#38A2A5" />
								</svg>
								<span class=""> meet the executives</span>
							</div>
							<!-- carousel -->
							<div id="executiveCarousel" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#executiveCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#executiveCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="bg-primary"></button>
								</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row my-1">
										<div class="col">
											<img src="<?php echo get_theme_file_uri('assets/images/CC-100.jpg');?>" alt="" class="w-100 d-md-none rounded-circle"/>
											<img src="<?php echo get_theme_file_uri('assets/images/CC-100.jpg');?>" alt="" class="w-75 d-none d-md-block rounded-circle"/>
										</div>
								<div class="col-8 executives_content">
									<p>
									Deji is a Digital Business Transformation and Agile
									Business leader with over 20 years of progressive
									experience, focused on the portfolio, program, and
									product management. He is widely regarded as an agent
									of transformation and performance turnaround for
									individuals, projects, businesses, and government
									agencies.
									</p>
									<h3 class="text-uppercase">deji jemiyo</h3>
									<span class="text-uppercase">co-founder, diberr</span>
								</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
								<div class="col">
									<img
									src="<?php echo get_theme_file_uri('assets/images/CC-100.jpg')?>"
									alt=""
									class="w-100 d-md-none rounded-circle"
									/>
									<img
									src="<?php echo get_theme_file_uri('assets/images/CC-100.jpg')?>"
									alt=""
									class="w-75 d-none d-md-block rounded-circle"
									/>
								</div>

								<div class="col-8 executives_content">
									<p>
									Ehia is an exeperienced organizational transformation
									profestional with over (2) decades of exeperience in
									organizational change and digital transformation
									deploying Lean-Agile, Lean Six Sigma, and Portfolio
									management methodology to organizations accross
									industries such as Financial Services, Manufactoruing,
									Aviation, Oil & Gas and Telecommunications, improving
									their top-line and butttom-line growth.
									</p>
									<h3 class="text-uppercase">ehia erhabo</h3>
									<span class="text-uppercase">board member</span>
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>

						<!-- end -->
					</div>
				</section>
				<!-- section 6 -->
				
				<section>
				<div class="container my-3 my-md-5">
					<div class="row pt-md-5 join-team">
					<div class="col">
						<div>
							<svg class="d-none d-md-inline me-2" width="75" height="4" viewBox="0 0 75 4" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="75" height="4" rx="3.05319" fill="#38A2A5" />
							</svg>
							<svg class="d-inline-block d-md-none" width="32" height="2" viewBox="0 0 32 2" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="2" rx="3.05319" fill="#38A2A5" />
							</svg>
						<span class="d-inline">join the team</span>
						</div>
						<p class="pt-md-3 pe-md-5 py-3">
						We invent the future. <br />
						if you have a passion for solving Business problems, we have a
						place for you
						</p>
						<a href="" class="d-block"
						><i class="fa-solid fa-arrow-right-long me-2"></i> contact
						us</a
						>
						<a href="" class="d-block"
						><i class="fa-solid fa-arrow-right-long me-2"></i> see job
						openings
						</a>
					</div>
					<div class="col">
						<img
						src="<?php echo get_theme_file_uri('assets/images/pexels-edmond-dantès-8553867.jpg')?>"
						alt=""
						class="w-100"
						/>
					</div>
					</div>
				</div>
				</section>
				<!-- section 7 -->
				<section>
				<div class="newsletter">
					<div class="container">
					<div class="row align-items-center py-3 py-md-5">
						<div class="col-12 col-md-6">
						<div class="text-center text-md-start my-2 my-md-0">
							<h6 class="d-md-none fw-bold mb-0 text-white">
							Do you want to get updated?
							</h6>
							<h3 class="d-none d-md-block fw-bold mb-0 text-white">
							Do you want <br />
							to get updated?
							</h3>
							<span class="" >Join our Newsletter and stay up to date </span>
						</div>
						</div>
						<div class="col-12 col-md-6">
						<form
							action=""
							class="d-flex justify-content-center gap-2 gap-md-3"
						>
							<input
							type="email"
							placeholder="Enter Email"
							class="py-md-2 ps-md-2 pe-md-5 bg-transparent border-0"
							/>
							<button
							type="submit"
							class="py-md-3 px-md-4 border-0 text-uppercase"
							>
							subscribe
							</button>
						</form>
						</div>
					</div>
					</div>
				</div>
				</section>
<?php get_footer();?>
