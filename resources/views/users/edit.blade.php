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
			<h4 class="center">Editando Usuário {{ $data->name }}</h4>
			<form action="{{ route('users.update', ['id'=>$data->id]) }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">account_circle</i>
								<input type="text" name="name" value="{{ $data->name }}" placeholder="Digite o Nome do Usuário">
							<label for="name">Nome</label>
						</div>
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">email</i>
								<input type="text" onblur="textLower(this)" name="value" value="{{ $data->email }}" placeholder="Digite o E-mail do Usuário">
							<label for="value">E-mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s11 m5 l5 xl5">
							<i class="material-icons prefix">lock</i>
								<input type="password" name="password" id="password" placeholder="Digite a Senha do Usuário">
							<label for="password">Senha</label>
						</div>
						<div class="input-field col s1">
							<button type="button" onclick="showPwd()" class="btn-flat waves-effect waves-light"><i class="large material-icons" onclick="changeIcon(this)">visibility_off</i></button>
						</div>
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">clear_all</i>
								<input type="text" name="url" value="{{ $data->url }}" placeholder="Digite a Url do Usuário">
							<label for="url">Url</label>
						</div>
					</div>
					<div class="row">
			        	<div class="input-field col s12">
			        		<i class="material-icons prefix">mode_edit</i>
			          			<textarea name="body" class="materialize-textarea">{{ $data->body }}</textarea>
			          		<label for="textarea1">Textarea</label>
			        	</div>
			      </div>
			      <button type="submit" class="btn waves-effect waves-light red darken-4">Enviar</button>
			</form>
			<a class="waves-effect waves-light btn blue-grey" href="{{  route('users.index') }}">Voltar</a>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
			function textLower(texto) 
			{
				text = texto.value.toLowerCase();
				texto.value = text;
			}
			function showPwd()
			{
				pwd = document.getElementById("password");
				tipo = (pwd.type == "password") ? "text" : "password";
				pwd.type = tipo;
			}
			function changeIcon(icon)
			{
				pwd = (icon.innerHTML == "visibility_off") ? "visibility" : "visibility_off";
				icon.innerHTML = pwd;
			}
	</script>
</body>
</html