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
     <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">filter_list</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>
</header>
			
	
	<main>
		<div class="container">
			<h4 class="center">Editando Produto {{ $product->title }}</h4>
			<form action="{{ route('products.update', ['id'=>$product->id]) }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">archive</i>
								<input type="text" name="title" value="{{ $product->title }}" placeholder="Digite o Nome do Produto">
							<label for="title">Titulo</label>
						</div>
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">attach_money</i>
								<input type="text" name="value" value="{{ $product->value }}" placeholder="Digite o Valor do Produto">
							<label for="value">Valor</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">filter_1</i>
								<input type="text" name="qtd" value="{{ $product->qtd }}" placeholder="Digite a Quantidade do Produto">
							<label for="qtd">Quantidade</label>
						</div>
						<div class="input-field col s12 m6 l6 xl6">
							<i class="material-icons prefix">clear_all</i>
								<input type="text" name="url" value="{{ $product->url }}" placeholder="Digite a Url do Produto">
							<label for="url">Url</label>
						</div>
					</div>
					<div class="row">
			        	<div class="input-field col s12">
			        		<i class="material-icons prefix">mode_edit</i>
			          			<textarea name="body" class="materialize-textarea">{{ $product->body }}</textarea>
			          		<label for="textarea1">Textarea</label>
			        	</div>
			      </div>
			      <button type="submit" class="btn waves-effect waves-light red darken-4">Enviar</button>
			</form>
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