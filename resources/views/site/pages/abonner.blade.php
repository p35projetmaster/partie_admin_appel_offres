
@extends('site.partials.layout')
@section('header')
@endsection
@section('corp')
            <!-- Breadcrumbs -->
			<section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Abonnement</h2>
							<ul>
								<li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="#"><i class="fa fa-clone"></i>Abonnement</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Breadcrumbs -->
            <!-- Default form register -->
            <div class="container" style="margin-top:20px">

                <p>Vous pouvez télécharger le formulaire de format pdf <a href="{{asset('site/formulaire.pdf')}}">Cliquez ICI</a></p>
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">S'Abonner</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="identifiant" class="form-control" placeholder="Identifiant">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="password" autocomplete="new-password" name="password" class="form-control" placeholder="Mot de passe">
                            <small  class="form-text text-muted">
                                Au moins 8 caractères.
                            </small>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="password" name="password-confirm" class="form-control" placeholder=" Confirmation mot de passe">
                            <small  class="form-text text-muted">
                                Au moins 8 caractères.
                            </small>
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="tel" class="form-control" placeholder="Téléphone">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" name="email" autocomplete="off" class="form-control mb-4" placeholder="E-mail">
                    <div class="form-row mb-4">
                        <div class="col">

                            <select name="pays" class="form-control" >
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="wilaya" class="form-control" >
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            J'accepte les <a href="">conditions d'utilisation</a>
                        </label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit">Valider</button>




                </form>
            <!-- Default form register -->
            </div>



@endsection
@section('footer')


@endsection
