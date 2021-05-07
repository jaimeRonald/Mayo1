<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<ul>
			<li><a href="{{route('home')}}">home</a></li>
			<li><a href="{{route('about')}}">about</a></li>
			<li><a href="{{route('blog.index')}}">Blog</a></li>
			<li><a href="{{route('contac')}}">Contactos</a></li>
		</ul>
		 @yield('contenido')
		Menu
	</div>
       
</body>
</html>