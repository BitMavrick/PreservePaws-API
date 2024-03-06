<x-master.master>

	<x-slot name="title">
        {{ $title ?? 'Home | PreservePaws'}}
    </x-slot>

	<x-partials.navbar/>

	<section class="section bg-light">
        <div class="container align-items-center mb-4">
            <div class="text-center mx-4">
                <h1>Need your help to save the planet!</h1>
                <br>
                <div class="text">
                    <h5>This project aims to serve the acknowledgment of almost extinct animals that need saving. To preserve this animal for a better future and humankind.</h5>
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

	<x-partials.footer/>

</x-master.master>