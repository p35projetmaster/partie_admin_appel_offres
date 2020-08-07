<!-- Start Header -->
			<header class="header">
				<!-- Start Topbar -->
				<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="top-inner">
									<div class="row">
										<div class="col-lg-8 col-12">
											<!-- Top Contact -->
											<ul class="top-contact">
												<li><i class="fa fa-map-marker"></i>125 Bois des Cars III,Dely-Ibrahim Alger</li>
												<li><a href="mailto:contact@baosem.com"><i class="fa fa-paper-plane"></i>contact@baosem.com</a></li>

											</ul>
											<!-- End Top Contact -->
										</div>
										<div class="col-lg-4 col-12">
											<div class="top-right">
												<!-- Language Nav -->

												<!-- Social Icons -->
												<ul class="social-icons">
													<li><a href="https://www.facebook.com/baosemofficiel2019" target="_blank"><i class="fa fa-facebook"></i></a></li>
													<li class="active"><a  target="_blank" href="https://www.linkedin.com/company/baosem"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="https://www.youtube.com/watch?v=gDZYJtFddfg"  target="_blank"><i class="fa fa-youtube"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Topbar -->
				<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-12">
								<!-- Logo -->
								<div class="logo">
									<!-- Text Logo -->
									{{-- <div class="text-logo">
										<a href="index.html">Baosem.</a>
									</div> --}}
									<!-- Image Logo-->
									<div class="img-logo">
										<a href="{{url('/')}}"><img src="{{asset('site/images/logo/logo.png')}}" alt="logo"></a>
									</div>
								</div>
								<!-- Mobile Menu -->
								<div class="mobile-nav"></div>
							</div>
							<div class="col-lg-10 col-12">
								<div class="main-menu-bar">
									<!-- Main Menu -->
									<div class="main-menu">
										<nav class="navbar navbar-expand-lg">
											<div class="navbar-collapse">
												<ul class="nav menu navbar-nav">

                                                    <li class="active"><a class="menue"  href="{{url('/')}}">Accueil</a></li>
													{{-- <li><a class="menue"  href="{{url('/Presentation')}}">Présentation</a></li> --}}
													<li class="dropdown1"><a class="dropbtn menue">Abonnement</a>
                                                        <div class="dropdown-content">
                                                            <a class="link-hover" href="{{url('Abonnement')}}">S'abonner</a>
                                                            <a class="link-hover" data-toggle="modal" data-target="#modalLoginForm">Se Connecter</a>
                                                        </div>
                                                    </li>
                                                    <li><a class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>
													<li><a class="menue" href="{{url('Contact')}}">Contactez Nous</a></li>
												</ul>
											</div>
										</nav>
									</div>
									<!--/ End Main Menu -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Header Inner -->
            </header>
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Se Connecter</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action=""  autocomplete="off">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="identifiant"  autocomplete="off" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Identifiant</label>
                            </div>

                            <div class="md-form mb-4">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" name="password" autocomplete="new-password"  class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default">Connecter</button>
                        </div>

                    </form>
                    </div>
                </div>
                </div>
			<!--/ End Header -->