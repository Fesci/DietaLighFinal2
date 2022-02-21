<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="container">
			<a href="{{url("/")}}"><img src="img/dietalogomini.png" alt="logomini" class="navbar-brand"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link"href="{{route('home')}}" class="{{(request()->routeIs('home') ? 'active' : '') }}">Home</a></li>
				
					<li class="nav-item"><a class="nav-link"href="{{route('menu.index')}}" class="{{(request()->routeIs('menu.*') ? 'active' : '') }}">Menu semanal</a></li>
				
					<li class="nav-item"><a class="nav-link"href="{{route('nosotros')}}" class="{{(request()->routeIs('nosotros') ? 'active' : '') }}">Nosotros</a></li>
					<li class="nav-item"><a class="nav-link"href="{{route('contacto.index')}}" class="{{(request()->routeIs('contacto.index') ? 'active' : '') }}">Contacto</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
</header>