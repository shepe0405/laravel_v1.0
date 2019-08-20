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
			<h4 class="center">Produtos</h4>
				<table class="centered">
					<thead>
						<tr>
							<th>ID</th>
							<th>TITULO</th>
							<th>AÇÕES</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($products as $key => $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->title }}</td>
							<td>
								<a class="waves-effect waves-light btn green darken-4" href="{{  route('products.show', ['id'=>$product->id]) }}">View</a>
								<a class="waves-effect waves-light btn blue darken-4" href="{{  route('products.edit', ['id'=>$product->id]) }}">Edit</a>
								<a class="waves-effect waves-light btn red darken-4" href="{{  route('products.destroy', ['id'=>$product->id]) }}">Remove</a>

							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
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