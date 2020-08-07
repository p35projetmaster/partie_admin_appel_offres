
@extends('site.partials.layout')
@section('header')
@endsection
@section('corp')

            <!-- Breadcrumbs -->
			<section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Contactez-Nous</h2>
							<ul>
								<li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="#"><i class="fa fa-clone"></i>Contactez-Nous</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Breadcrumbs -->
            <!-- Contact Us -->
			<section class="contact-us section-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<div class="section-title text-center m-bottom-30">
								<h2><span>Contactez</span>Nous</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Contact Form -->
						<div class="col-lg-8 col-12">
							<form class="contact-form m-top-30" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<span><i class="fa fa-user-o"></i></span>
											<input type="text" name="nom" placeholder="Nom" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<span><i class="fa fa-envelope-o"></i></span>
											<input type="email" name="email" placeholder="Email" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<span><i class="fa fa-clone"></i></span>
											<input type="text" name="sujet" placeholder="Sujet" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group message">
											<span><i class="fa fa-pencil"></i></span>
											<textarea name="msg" rows="4" placeholder="Ecrire votre message Ici" ></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn theme-2 effect">Envoyer Message<i class="fa fa-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ Contact Form -->
						<div class="col-lg-4 col-12">
							<div class="contact-info m-top-30">
								<div class="info-head">
									<h2>Informations de contact </h2>
									{{-- <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it kille You think water moves fast.</p> --}}
								</div>
								<div class="info-list">
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-headphones"></i>24/7 Téléphone</span>
										<p>+(213) 23 31 85 92,  +(213) 23 31 86 15</p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-home"></i>Notre Adresse</span>
										<p>125 Bois des Cars III,Dely-Ibrahim Alger </p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-envelope"></i>Email Officiel</span>
										<p><a href="mailto:contact@baosem.com">contact@baosem.com</a>, <a href="mailto:support@baosem.com">support@baosem.com</a></p>
									</div>
									<!--/ End Single Address -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Clients Us -->



@endsection
@section('footer')


@endsection
