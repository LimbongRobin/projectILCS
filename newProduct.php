<?php require_once("header.php") ?>
	<!-- mobile_botton -->
	<button type="button" id="mobile-nav-toggle">
		<i class="fa fa-bars fa-2x" id="menu-icon"></i>
	</button>

	<!-- header_nav_bar -->
	<header class="header-fixed" id="headerProduct">
		<div class="container-fluid" id="containerProduct">
			<div class="container-fluid">
				<div class="pull-left" id="logo" style="clear:left; display:inline-block; background-color:transparent;">
					<h1>
						<img src="img/logo.png" width="40px;">
						<a href="#" class="scrollto" id="text-logo">ILCS Training</a>
					</h1>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu sf-js-enabled sf-arraows" style="touch-action:pan-y;">
						<li>
							<a href="./#about">About Us</a>
						</li>
						<li>
							<a href="#">Available Workshops</a>
						</li>
						<li>
							<a href="">Blog</a>
							</li>
						<li>
							<a href="" class="btn btn-outline-primary btn-round p-0 px-3" style="max-width:100px; border:1px solid white;">Register</a>
						</li>
						<li>
							<a href="" class="btn btn-outline-secondary btn-round p-0 px-3" style="max-width:100px; border:1px solid white;">Login</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

<div id="main">
	<div class="container" id="contProduct">
			<div class="row justify-content-md-center">
				<div class="col-md-8 col-lg-6 mt-5">
					<form action="#" accept-charset="utf-8" method="get">
						<input name="utf-8" type="hidden" value=""></input>
						<div class="input-group">
							<input class="form-control" name="keyword" placeholder="Cari" type="text"></input>
							<div class="input-group-append">
								<button class="btn btn-outline-primary" id="button-addon2">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
					<div class="d-flex flex-wrap justify-content-center sm-1" id="catProduct">
						<div class="p-2">
							<a href="/product?category=0"> Semua Kategory</a>
						</div>
						<div class="p-2">
							<a href="/product?category=1"> IT/Komputer</a>
						</div>
						<div class="p-2">
							<a href="/product?category=2"> Kuliner</a>
						</div>
						<div class="p-2">
							<a href="/product?category=11"> Robotika</a>
						</div>
						<div class="p-2">
							<a href="/product?category=12"> Marketing</a>
						</div>
						<div class="p-2">
							<a href="/product?category=13"> Edukasi</a>
						</div>
						<div class="p-2">
							<a href="/product?category=14"> Masak</a>
						</div>
						<div class="p-2">
							<a href="/product?category=15"> Pareting</a>
						</div>
						<div class="p-2">
							<a href="/product?category=17"> Fotografi</a>
						</div>
						<div class="p-2">
							<a href="/product?category=18"> Enterpreneur</a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="wrapper" id="products">
				<div class="my-3 fg-gray-600">
					<small>61 kursus ditemukan</small>
				</div>
				<div class="row d-md-flex mt-4" id="prodResult">
					<div class="col-lg-4 col-md-4 mt-2">
						<a class="d-block" href="#">
							<div class="card card-outline-primary mb-5">
								<div class="card-img-top">
									<div class="rounded-circle text-center bg--primary fg--white">
										<div class="d-flex flex-column">
											<div class="bg-3">16</div>
											<div class="sm-3">NOV</div>
										</div>
									</div>
								</div>
								<div class="position-absolute fg--white">
									<b>33%</b>
								</div>
								<div class="card-body p-2 pt-3 mt-3">
									<div class="px-2">
										<h4 class="card-title text-primary">
											Sociopreneur Talk
										</h4>
										<div class="card-text text-muted pb-3 border-bottom"></div>
										<div class="text-center fg--gray pt-3 sm-2 mt-3">
											<del>Rp75000</del>
										</div>
										<div class="text-center card-title c-orange">
											<b>Rp50000</b>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 mt-2">
						<a class="d-block" href="#">
							<div class="card card-outline-primary mb-5">
								<div class="card-img-top">
									<div class="rounded-circle text-center bg--primary fg--white">
										<div class="d-flex flex-column">
											<div class="bg-3">16</div>
											<div class="sm-3">NOV</div>
										</div>
									</div>
								</div>
								<div class="position-absolute fg--white">
									<b>33%</b>
								</div>
								<div class="card-body p-2 pt-3 mt-3">
									<div class="px-2">
										<h4 class="card-title text-primary">
											Sociopreneur Talk
										</h4>
										<div class="card-text text-muted pb-3 border-bottom"></div>
										<div class="text-center fg--gray pt-3 sm-2 mt-3">
											<del>Rp75000</del>
										</div>
										<div class="text-center card-title c-orange">
											<b>Rp50000</b>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 mt-2">
						<a class="d-block" href="#">
							<div class="card card-outline-primary mb-5">
								<div class="card-img-top">
									<div class="rounded-circle text-center bg--primary fg--white">
										<div class="d-flex flex-column">
											<div class="bg-3">16</div>
											<div class="sm-3">NOV</div>
										</div>
									</div>
								</div>
								<div class="position-absolute fg--white">
									<b>33%</b>
								</div>
								<div class="card-body p-2 pt-3">
									<div class="px-2">
										<h4 class="card-title text-primary mt-3">
											Sociopreneur Talk
										</h4>
										<div class="card-text text-muted pb-3 border-bottom"></div>
										<div class="text-center fg--gray pt-3 sm-2 mt-3">
											<del>Rp75000</del>
										</div>
										<div class="text-center card-title c-orange">
											<b>Rp50000</b>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- detailProduct -->
			<div class="wrapper" id="showProductDetail">
				<div class="row product mt-5">
					<div class="col-sm-12 col-md-9">
						<div class="row">
							<div class="col-sm-12 col-md-5	mb--1">
								<div class="border">
									<div class="carousel slide">
										<ol class="carousel-indictors">
											<li class="active"></li>
										</ol>
										<div class="carousel-inner">
											<div class="active carousal-item">
												<a class="d-block" href="#">
													<div class="product-header" id="detailProduct"></div>
												</a>
											</div>
										</div>
										<a class="carousel-control-prev">
											<span aria-hidden='true' class="carousel-control-prev-icon"></span>
											<span class="sr-only">
												Previews
											</span>
										</a>
										<a class="carousel-control-next" href="#">
											<span aria-hidden="true" class="carousel-control-next-icon"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
									<ol class="carousel-indicators mt-3 mb-4">
										<li class="mx-1"></li>
									</ol>	
								</div>
								<div class="product__share">
									<span class="product__share--text">
										Share :	
									</span>
									<a class="fab fa-facebook-square" href="https://www.facebook.com/share.php?u=https://kursusku.id/kelas/be-a-smart-woman-cerdas-gunakan-obat" target="_blank"></a>
									<a class="fab fa-twitter-square" href="https://twitter.com/share?text=&url=https://kursusku.id/kelas/be-a-smart-woman-cerdas-gunakan-obat&hashtags=kursusku" target="_blank"></a>
									<a class="fab fa-google-plus-square" href="https://plus.google.com/share?url=https://kursusku.id/kelas/be-a-smart-woman-cerdas-gunakan-obat" target="_blank"></a>
								</div>
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="header__product--content mb-3">
									Be A Smart Woman: Cerdas Gunakan Obat
									<br>
									<div class="sm-3 d-inline fg--secondary">
										(dilihat: 26 Kali)
									</div>
								</div>
								<div class="product__detail mb--1" id="product-detail">
									<div class="d-flex align-items-center product__detail-item">
											<i class="fa fa-map-marker flex-shrink-0"></i>
											<div class="product__detail-label flex-shrink-0">Lokasi</div>
											<div class="product___detail-content">Online Gratis</div>
									</div>
									<div class="d-flex align-items-center product__detail-item">
										<i class="fa fa-calendar flex-shrink-0"></i>
										<div class="product__detail-label flex-shrink-0">Tanggal</div>
										<div class="product___detail-content">07 November 2019</div>
									</div>
									<div class="d-flex align-items-center product__detail-item">
										<i class="fa fa-clock flex-shrink-0"></i>
										<div class="product__detail-label flex-shrink-0">Durasi</div>
										<div class="product___detail-content">3 jam, 19.00 - 20.30</div>
									</div>
									<div class="d-flex align-items-center product__detail-item">
										<i class="fa fa-child flex-shrink-0"></i>
										<div class="product__detail-label flex-shrink-0">Level</div>
										<div class="product___detail-content">Basic</div>
									</div>
									<div class="pr-3">
										<div class="d-flex align-items-end flex-column">
											<h3 class="fg--secondary">
												<div class="text-right fg--gray sm-1"></div>
												<div class="text-right">
													<b>GRATIS</b>
												</div>
											</h3>
											<form action="#" accept-charset="utf-8" method="post">
												<input name="utf8" type="hidden" value=""></input>	
												<input name="authenticity_token" type="hidden" value=""></input>
												<input type="hidden" name="product[id]" id="product_id" value=""></input>
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-shopping-cart pr-3">
														Pesan Sekarang
													</i>
												</button>
											</form>
											<div class="sm-2 mt-3 fg--gray-600 text-right">
												Pesan Sebeblum: 2019-11-07
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-5 p-3 text-justity">
							<div class="d-flex justify-content-around border-bottom text-center">
								<a class="flex-fill tabs-item active" href="#">Deskripsi</a>
								<a class="flex-fill tabs-item" href="#">Fasilitas</a>
								<a class="flex-fill tabs-item" href="#">Jadwal</a>
							</div>
							<div class="py-3 px-sm-0">
								<div id="description">
									<p>
										Apa sih bedanya obat generik dan obat bermerek? Bagaimana ya cara mendapatkan, menggunakan, menyimpan, dan membuang obat yang benar? Penggunaan obat yang salah bisa berbahaya lho.. Yuk kita bahas sama-sama di Kulwap "Be A Smart Woman: Cerdas Gunakan Obat" 
									</p>
									<div class="pl-3">
										<b class="mt-3 mb-2">Tujuan</b>
										<p>Peserta kulwap dapat mengetahui bagaimana cara mendapatkan, menggunakan, menyimpan, dan membuang obat yang benar.
										</p>
										<b class="mt-3 mb-2">Prasyarat</b>
										<p>Kursus ini dapat diikuti secara GRATIS dengan syarat:</p>
										<ol>
											<li>Follow instagram @kursusku.id</li>
											<li>Share postingan ke minimal 2 grup whatsapp</li>
										</ol>
									</div>
								</div>
								<div id="fasilities">
									<h5 class="mt-5 fg--primary">
										Fasilitas
									</h5>
									<ol>
									<li>Tanya jawab</li>
										<li>Resume kulwap</li>
									</ol>
								</div>
								<div id="schedule">
									<h5 class="mt-5 fg--primary">
										Agenda Pelatihan
									</h5>
									<p>Kamis, 7 November 2019</p>
									<ol>
										<li>
											Pengantar
										</li>
										<li>
											Cara mendapatkan obat yang benar
										</li>
										<li>
											Cara Membuang Obat Yang Benar
										</li>
									</ol>
								</div>
								<div id="location">
									<h5 class="mt-5 fg--primary">
										Lokasi Pelatihan
									</h5>
									<p>Kelas Whatsapp (Kulwap)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-3">
						<div class="circle-image circle-image-150  m-auto">
							<img src="img/detailProduct/obat.jpg" width="100%">
						</div>
						<div class="text-center bg-2 mt-3">
							<b>Alvin S.KOM.</b>
						</div>
						<small>
							<b>Pengalaman</b>
						</small>
						<ol>
							<li>
								Sarjana Komputer 2019
							</li>
							<li>
								Programmer Di PT. ILCS
							</li>
						</ol>
						<div class="mt-3"></div>
					</div>
				</div>
			</div>
	</div>
</div>


<?php require_once("footer.php"); ?>
