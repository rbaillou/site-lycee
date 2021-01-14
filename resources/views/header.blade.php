<!-- NavBar -->
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand">
		<img src="/img/aquitaine.png" href="https://www.nouvelle-aquitaine.fr/" width="90px">
		<img src="/img/ac-poitiers.png" href="http://www.ac-poitiers.fr/" width="55px">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
		
		<li class="nav-item active">
			<a class="nav-link" href="../accueil">Accueil</span></a>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Vie du lycée
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">E.N.T</a>
				<a class="dropdown-item" href="../restauration">Restauration</a>
				<a class="dropdown-item" href="../restauration/menu">Menus</a>
				<a class="dropdown-item" href="#">Vie Scolaire</a>
				<a class="dropdown-item" href="#">Sorties / Evenement</a>
				<a class="dropdown-item" href="#">CDI</a>
				<a class="dropdown-item" href="#">Internats</a>
			</div>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Formation
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Orientations</a>
				<a class="dropdown-item" href="#">Portes Ouvertes</a>
				<a class="dropdown-item" href="#">Classe de seconde</a>
				<a class="dropdown-item" href="#">Baccalauréat</a>
				<a class="dropdown-item" href="#">Baccalauréat général</a>
				<a class="dropdown-item" href="#">BTS Gestion PME</a>
				<a class="dropdown-item" href="#">BTS SIO</a>
			</div>
		</li>

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Information Pratique
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Délibérations du conseil</a>
				<a class="dropdown-item" href="#">Réglement intérieur</a>
				<a class="dropdown-item" href="#">Charte informatique</a>
				<a class="dropdown-item" href="#">Réglement service d'hébergement</a>
				<a class="dropdown-item" href="#">Dossiers incriptions</a>
				<a class="dropdown-item" href="#">Dossiers bourses</a>
				<a class="dropdown-item" href="#">Fonds Sociaux</a>
				<a class="dropdown-item" href="#">Marchés publics</a>
			</div>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Evénement pédagogique
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Arts Plastiques</a>
				<a class="dropdown-item" href="#">Anglais</a>
				<a class="dropdown-item" href="#">Allemand</a>
				<a class="dropdown-item" href="#">Espagnol</a>
				<a class="dropdown-item" href="#">Italien</a>
				<a class="dropdown-item" href="#">Latin</a>
				<a class="dropdown-item" href="#">Mathématiques</a>
				<a class="dropdown-item" href="#">Sciences physiques</a>
				<a class="dropdown-item" href="#">Sciences de la vie et de la terre</a>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="#bas-de-page">Contact</a>
		</li>

			<li class="navbar-nav ml-auto">
				<!-- Authentication -->
				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a>
					</li>
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<i class="bi bi-people-fill"></i> {{ Auth::user()->identifiant }}
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Se déconnecter') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</li>
		
		</ul>
	</div>
</nav>

<!-- CSS -->
<style>

.navbar-dark .navbar-nav .nav-link {
	color: white;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: bold;

}
.nav-link:hover {
	background-color: #666;
	color: white;
	width: 100%;
	height: 100%;
}

</style>
