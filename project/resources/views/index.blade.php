<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="BitMavrick">
	<link rel="shortcut icon" href="/assets/favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="/assets/css/tiny-slider.css">
	<link rel="stylesheet" href="/assets/css/aos.css">
	<link rel="stylesheet" href="/assets/css/glightbox.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">

	<link rel="stylesheet" href="/assets/css/flatpickr.min.css">


	<title>PreservePaws-API</title>
</head>
<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-6">
							<a href="index.html" class="logo m-0 float-start">PreservePaws</a>
						</div>

						<div class="col-6 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

							<ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu mx-auto">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="category.html">API</a></li>
								<li><a href="category.html">About</a></li>
								<li><a href="category.html">Policies</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- {{ $animals[1]->type->category->category}}
	<br>
	{{ $animals[2]->type->type}} -->

	<section class="section bg-light">
        <div class="container align-items-center mb-4">
            <div class="text-center mx-4">
                <h1>Need your help to save the planet!</h1>
                <br>
                <div class="text">
                    <h5>This API project aims to serve the acknowledgment of almost extinct animals that need saving. To preserve this animal for a better future and humankind.</h5>
                </div>
            </div>
        </div>

        <br>

		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Situation</h2>
				</div>
			</div>
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQBP2gA9Yg6IgjFGKZf3l7tIIKKV6Q0bKAak8wQO_jk0F2x1NRb');"></div>
						<!-- <div class="featured-img" style="background-image: url('{{ $animals[2]->image_url }}');"></div> -->

						<div class="text">
							<span class="date">{{ $animals[1]->population_status }}</span>
							<h2>{{ $animals[1]->name }}</h2>
							<span class="date">Population est. : {{ $animals[1]->population_count_est }}</span>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('/assets/images/img_5_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">{{ $animals[2]->population_status }}</span>
							<h2>{{ $animals[2]->name }}</h2>
							<span class="date">Population est. : {{ $animals[2]->population_count_est }}</span>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('/assets/images/img_1_vertical.jpg');"></div>

						<div class="text">
							<span class="date">{{ $animals[0]->population_status }}</span>
							<h2>{{ $animals[0]->name }}</h2>
							<span class="date">Population est. : {{ $animals[0]->population_count_est }}</span>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('/assets/images/img_3_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">{{ $animals[3]->population_status }}</span>
							<h2>{{ $animals[3]->name }}</h2>
							<span class="date">Population est. : {{ $animals[3]->population_count_est }}</span>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('/assets/images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">{{ $animals[4]->population_status }}</span>
							<h2>{{ $animals[4]->name }}</h2>
							<span class="date">Population est. : {{ $animals[4]->population_count_est }}</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<div class="bg-light mb-4">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">More</h2>
				</div>
			</div>

			<div class="row align-items-stretch retro-layout-alt">

				<div class="col-md-5 order-md-2">
					<a href="single.html" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('/assets/images/img_2_vertical.jpg');"></div>
						<div class="text">
							<span>February 12, 2019</span>
							<h2>Meta unveils fees on metaverse sales</h2>
						</div>
					</a>
				</div>

				<div class="col-md-7">

					<a href="single.html" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('/assets/images/img_1_horizontal.jpg');"></div>
						<div class="text text-sm">
							<span>February 12, 2019</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a>

					<div class="two-col d-block d-md-flex justify-content-between">
						<a href="single.html" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('/assets/images/img_2_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Don’t assume your user data in the cloud is safe</h2>
							</div>
						</a>
						<a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
							<div class="featured-img" style="background-image: url('/assets/images/img_3_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Startup vs corporate: What job suits you best?</h2>
							</div>
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>

	<br>
	<br>


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
							<ul>
								<li>
									<a href="">
										<img src="/assets/images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="/assets/images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="/assets/images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>

    <script src="/assets/js/flatpickr.min.js"></script>


    <script src="/assets/js/aos.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/counter.js"></script>
    <script src="/assets/js/custom.js"></script>


  </body>
  </html>

