<!--DOCTYPE html-->
<html>
<head>
<body class="grey lighten-3">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/><!-- META DE RESPONSIVIDADE-->
   <title>API</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
  <header>
     <nav class="blue-grey">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">filter_list</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{ route('users.create') }}">Novo</a></li>
          <li><a href="{{ route('users.index') }}">Lista</a></li>
          <li><a>Javascript</a></li>
          <li><a>Mobile</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
    	<li><a href="{{ route('users.create') }}">Novo</a></li>
      <li><a href="{{ route('users.index') }}">Lista</a></li>
      <li><a>Javascript</a></li>
      <li><a>Mobile</a></li>
    </ul>
</header>
			
	
	<main>
		<div class="container">
			<h4 class="center">{{ $data->name }}</h4>
				<div class="red darken-3 white-text z-depth-3" style="padding: 3px; border-radius: 5px;">
					<div class="row">
						<p class="col s12 m4 l4 xl4">E-mail: {{ $data->email }}</p>
						<p class="col s12 m4 l4 xl4">Criado: {{ $data->created_at }}</p>
						<p class="col s12 m4 l4 xl4">Atualizado: {{ $data->Updated_at }}</p>
					</div>
			</div>
			<a class="btn waves-effect waves-light blue-grey" href="{{ route('users.index') }}">Voltar</a>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
	</script>
</body>
</html