<ul>
	<li><a href="{{route('home')}}">Inicio</a></li>
	<li><a href="{{route('clientes.index')}}">Registro Clientes</a></li>
	<li><a href="{{route('contratos.index')}}">Contratos</a></li>
	<li><a href="{{route('actividades.index')}}">Mostrar Actividades</a></li>
	<li><a href="{{ route('register') }}">Registro Usuario</a></li>
	@auth
		<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
	@else
		<li><a href="{{route('login')}}">Login</a></li>
	@endauth
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
 </form>