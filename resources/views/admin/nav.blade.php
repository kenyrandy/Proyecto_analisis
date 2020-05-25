<div class="container">
				<ul id="gn-menu" class="gn-menu-main">
					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"></a>
						<nav class="gn-menu-wrapper">
							<div class="gn-scroller">
								<ul class="gn-menu">
									<li><a class="gn-icon gn-icon-home" href="{{route('home')}}">Inicio</a></li>
									<li><a class="gn-icon gn-icon-plus" href="newactivity.html">Ingresar actividad</a></li>
									<li><a class="gn-icon gn-icon-database">Datos maestros</a>
										<ul class="gn-submenu">
											<li><a class="gn-icon gn-icon-office" href="{{route('clientes.index')}}">Clientes</a></li>
											<li><a class="gn-icon gn-icon-user" href="{{route('contratos.index')}}">Contratos</a></li>
										</ul>
									</li>
									<li><a class="gn-icon gn-icon-stats-dots" href="reports.html">Reportes</a></li>
									<li><a class="gn-icon gn-icon-bookmark" href="{{ route('colaboradores.index') }}">Colaboradores</a>
										<ul class="gn-submenu">
											<li><a class="gn-icon gn-icon-user" href="users.html">Consultores VITO</a></li>
											<li><a class="gn-icon gn-icon-users" href="salespersonal.html">Asesores Comerciales</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</nav>
					</li>
					<li><a class="gn-icon gn-icon-home" href="{{route('home')}}"></a></li>
					<li><a class="gn-icon gn-icon-plus" href="newactivity.html"></a></li>
					@auth
					<li><a class="gn-icon gn-icon-user" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						Cerrar sesion</a></li>
						@else
						<li><a class="gn-icon gn-icon-user" href="{{route('login')}}"></a></li>
					@endauth
				</ul>
			</div>
			<script src="/plantilla/js/classie.js"></script>
			<script src="/plantilla/js/gnmenu.js"></script>
			<script>
				new gnMenu( document.getElementById( 'gn-menu' ) );
			</script>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            	@csrf
            </form>