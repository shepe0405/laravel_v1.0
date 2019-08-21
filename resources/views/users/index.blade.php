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
			<h4 class="center">Produtos</h4>
				<table class="centered">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th>E-MAIL</th>
							<th>AÇÕES</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($data as $key => $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<a class="waves-effect waves-light btn blue-grey darken-4" href="{{  route('users.show', ['id'=>$user->id]) }}">View</a>
								<a class="waves-effect waves-light btn blue-grey" href="{{  route('users.edit', ['id'=>$user->id]) }}">Edit</a>
								<form action="{{ route('users.update', ['id'=>$user->id]) }}" method="POST" style="display:inline-block">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn waves-effect waves-light red darken-4">Remove</button>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table><br>
				<a href="{{ route('users.create') }}" class="btn waves-light waves-effect blue-grey">Novo</a>
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