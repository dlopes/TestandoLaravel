<html>
<head>
	<script src="/js/jquery/jquery.min.js"></script>
	<script src="/css/bootstrap/js/bootstrap.min.js"></script>
	<link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	
	
	
    

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cursos</title>
</head>
<body>
  <div class="container">

	<nav class="navbar navbar-default">
	  <div class="container-fluid cabecalho">

		<div class="navbar-header ">      
		  <a class="navbar-brand" href="/cursos">Cursos</a>
		</div>


		<form class="navbar-form navbar-left" role="search" style="margin-left: 30%;">
			<div class="col-xs-12">
				<div class="input-group">
					<span class="input-group-addon">
					<button class="fa fa-search pesquisa-curso" style="background:transparent;border:none; color: #fff;"></button>
					</span>
					<input type="text" class="form-control pesq">
					
				</div>
			</div>
		</form>

	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="{{ action('CursoController@show') }}"><span class="glyphicon glyphicon-search"></span></a></li>
	      
	    </ul>

	  </div>
	</nav>

    @yield('conteudo')

	<footer class="footer">
	    <p>© Teste APP Curso.</p>
	</footer>
    
  </div>
</body>
</html>