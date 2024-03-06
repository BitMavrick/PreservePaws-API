<x-master.master>

	<x-slot name="title">
        {{ $title ?? 'Details | PreservePaws'}}
    </x-slot>

	<x-partials.navbar/>

    <div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-4 mb-lg-0">
					<!-- <img src="/assets/images/img_7_sq.jpg" alt="Image" class="img-fluid rounded -->
					<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQBP2gA9Yg6IgjFGKZf3l7tIIKKV6Q0bKAak8wQO_jk0F2x1NRb" alt="Image" class="img-fluid rounded
					">
				</div>
				<div class="col-lg-4 ps-lg-2">
					<div class="mb-5">
                        <h6 class="text-black h6">Status: In danger</h6>
						<h2 class="text-black h4">Royal Bengal Tiger (Scientific Name)</h2>
						<p>Interesting fact: Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-black h6">Category: Tiger</h6>
                        <h6 class="text-black h6">Type: Tiger</h6>
                        <h6 class="text-black h6">Population: 100 (estimated)</h6>
                        <hr>
                    </div>
					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-wallet-fill me-4"></span>
						</div>
						<div>
							<h3>Habitats</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-pie-chart-fill me-4"></span>
						</div>
						<div>
							<h3>Threat Factors</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-bag-check-fill me-4"></span>
						</div>
						<div>
							<h3>Conservation Effrots</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	

	<x-partials.footer/>

</x-master.master>