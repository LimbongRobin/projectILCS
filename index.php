<?php require_once("header.php") ?>

	<!-- mobile_botton -->
	<button type="button" id="mobile-nav-toggle">
		<i class="fa fa-bars fa-2x" id="menu-icon"></i>
	</button>

	<!-- header_nav_bar -->
	<header class="header-fixed" id="header">
		<div class="container-fluid" id="container">
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
							<a href="#about">About Us</a>
						</li>
						<li>
							<a href="#product">Available Workshops</a>
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

	<!-- text_animation -->
	<div class="intro-text text-center">
		<h1>#JadiLebihBaik</h1>
		<p class="bg-8">
			<a class="type-write sm-2" data-period="2000" data-type="['Robin Limbong','Teknik Informatika']"></a>
			<p id="text-animated">
				<span id='animation'></span>
				<b> | ILCS Training</b>
			</p>
		</p>
		<div class="d-flex flex-wrap mt-3 justify-content-center">
			<a class="btn btn-outline-primary btn-round p-0 px-3 mr-3 scrollto="href='#'" ">
				<b>Cari</b> Kursus
			</a>
			<a class="btn btn-outline-primary btn-round p-0 px-3 ml-3" href="#">
				<b>Buat</b> Kursus
			</a>
		</div>
	</div>

	<!-- about -->
	<div id="main">
		<section id="intro" style="background-image:url('img/bground1.jpg')!important; position:relative; top:0;"></section>
		<main>
			<section id="about">
				<div class="container-fluid">
					<div class="section-header mb-4 mt-3">
						<h3 class="section-title fg--primary"> What do We Do?</h3>
						<span class="section-divider mb-3 mt-3"></span>
						<p class="text-center m-auto bg-2">
							We bring together people who need skills with people who have skills and experiencess
						</p>
					</div>
					<div class="row no-gutters mb-5">
						<div class="col-md-10 offset-md-1 mt-4 text-center">
							<div class="row mt-5">
								<div class="col-lg-4 col-md-4 box">
									<div class="icon">
										<img width="100px"src="img/icon/upgradeSkill.png">
									</div>
									<h4 class="title mt-3 mb-4">
										<b>Upgrade Your Skill</b>
									</h4>
									<p class="description">
										Wether it is just for hobby or business, you always have chance to do it better
									</p>
								</div>
								<div class="col-lg-4 col-md-4 box">
									<div class="icon">
										<img width="100px"src="img/icon/learnExpert.png">
									</div>
									<h4 class="title mt-3 mb-4">
										<b>Learn From The Expert</b>
									</h4>
									<p class="description">
										We introduce you to someone who have a better skill and more experiences that you can learn from
									</p>
								</div>	
								<div class="col-lg-4 col-md-4 box">
									<div class="icon">
										<img width="100px"src="img/icon/joinTeam.png">
									</div>
									<h4 class="title mt-3 mb-4">
										<b>Join Community</b>
									</h4>
									<p class="description">
										Encourage yourself with a better environtment to share and learn from others
									</p>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="bg--grey-800" id="search">
				<div class="container pt-4">
					<div>
						<form action='' accept-charset="UTF-8" method="get">
							<div class="d-flex justify-content-center flex-wrap flex-column flex-md-row">
								<div class="form-group mx-2">
									<input class="form-control btn-round" name="keyword" placeholder="Kata Kunci" type="text">
									</input>	
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group mx-2">
									<select name="categori" id="category" class="form-control btn-round">
										<option value="0">Semua Kategori</option>
										<option value="1">IT/Komputer</option>
										<option value="2">Kuliner</option>
										<option value="11">Robotika</option>
										<option value="12">Marketing</option>
										<option value="13">Edukasi</option>
										<option value="14">Masak</option>
										<option value="15">Parenting</option>
										<option value="16">Photo Grafi</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center mx-2 mb-3">
									<button class="btn btn-primary form-control px-4 btn-round">
										<i class="fa fa-search pr-3"></i>
										Temukan Kursus
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- product -->
			<section class="bg-alt" id="product">
				<div class="container">
					<div class="mt-5">
						<h4 class="fg--primary text-center">Kursus Online Gratis</h4>
						<div class="row d-md-flex mt-4">
							<div class="col-lg-4 col-md-4 mt-2 wow fadeIn">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="card-img-top" id="singkong"></div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Singkong Rebus Gula Merah
												</h4>
												<div class="card-text text-muted pb-3">
													Online Class
												</div>
												<div class="text-center fg--grey pt-3 sm-2"></div>
												<div class="text-center card-title pt-4">
													<b>Gratis</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 mt-2 wow fadeIn">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="card-img-top" id="tepungBeras"></div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Kue Tepung Beras
												</h4>
												<div class="card-text text-muted pb-3">
													Online Class
												</div>
												<div class="text-center fg--grey pt-3 sm-2"></div>
												<div class="text-center card-title pt-4">
													<b>Gratis</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 mt-2 wow fadeIn">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="img-kursus card-img-top" id="cekerAyam"></div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Ceker Ayam Masak Kecap
												</h4>
												<div class="card-text text-muted pb-3">
													Online Class
												</div>
												<div class="fg--grey pt-3"></div>
												<div class="text-center card-title pt-4">
													<b>Gratis</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="mt-3">
						<h4 class="fg--primary text-center">
							Kursus Lainnya
						</h4>
						<div class="row d-md-flex mt-4">
							<div class="col-lg-4 col-md-4 mt-2">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="card-img-top" id="rajut">
											<div class="rounded-circle text-center bg--primary fg--white">
												<div class="d-flex flex-column">
													<div class="bg-3">20</div>
													<div class="sm-3">Nov</div>
												</div>
											</div>
										</div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Kursus Rajut Online Bulan November
												</h4>
												<div class="card-text text-muted pb-3 border-bottom">
													Online Class
												</div>
												<div class="text-center card-title mt-2">
													<b>Rp50.000</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 mt-2">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="card-img-top" id="mengelolaEmosi">
											<div class="rounded-circle text-center bg--primary fg--white">
												<div class="d-flex flex-column">
													<div class="bg-3">24</div>
													<div class="sm-3">OCT</div>
												</div>
											</div>
										</div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Kursus Rajut Online Bulan November
												</h4>
												<div class="card-text text-muted pb-3 border-bottom">
													Online Class
												</div>
												<div class="text-center card-title mt-2">
													<b>Rp50.000</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 mt-2">
								<a class="d-block" href="">
									<div class="card card-outline-primary mb-5">
										<div class="card-img-top" id="melatihFokus">
											<div class="rounded-circle text-center bg--primary fg--white">
												<div class="d-flex flex-column">
													<div class="bg-3">1</div>
													<div class="sm-3">NOV</div>
												</div>
											</div>
										</div>
										<div class="card-body p-2 pt-3">
											<div class="px-2">
												<h4 class="card-title text-primary">
													Kursus Rajut Online Bulan November
												</h4>
												<div class="card-text text-muted pb-3 border-bottom">
													Online Class
												</div>
												<div class="text-center card-title mt-2">
													<b>Rp50.000</b>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="text-center" id="btn-search-all">
								<a class="btn btn-secondary btn-centered btn-radius px-5 mt-3 mb-5" href="product.php">
									<b>Lihat Semua</b>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

<!-- 			
			<section class="mb-1 bt-1 line-1 mt-1 d-done d-md-block"></section>
			 info_system_user 
			<section id="info-user">
				<div class="container">
					<div class="row text-center fg--white p-2">
						<div class="col-md-4">
							<div class="row aling-items-center mt-3 mb-2">
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<i class="fa fa-users"></i>
								</div>
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<div class="my-2">136</div>
									<div>Pengguna</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row align-items-center mt-3 mb-2">
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<i class="fa fa-graduation-cap fa-5x"></i>
								</div>
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<div class="my-2">74</div>
									<div>Kursus</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row aling-items-center mt-3 mb-2">
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<i class="fa fa-address-card fa-5x"></i>
								</div>
								<div class="col-6 col-md-12 col-sm-6 col-lg-12">
									<div class="my-2">20</div>
									<div>Trainer</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb-1 mt-1 line-1 d-done d-md-block"></section> -->

<?php require_once("footer.php"); ?>
