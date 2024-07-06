<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/CSS/main.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

	<title>4Patas</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-xl">
			<a class="navbar-brand" href="#">
				<img src="./assets/Images/logo.png" alt="Logo" width="50" class="d-inline-block me-3">
				<b>4Patas</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-control"
				aria-controls="navbar-control" aria-expanded="false" aria-label="Navegar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse p-3 bg-white" id="navbar-control">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Início</a>
					</li>

				</ul>
				<div class="d-lg-flex col-lg-4 justify-content-lg-end">
					<a href="signup" class="btn btn-link">Criar conta</a>
					<a href="donation" class="btn donation">Faça uma doação</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="content">
		<div class="main container">
			<div class="main-banner">
				<h1>Loja 4Patas</h1>
				<p style="text-align: center">Comprando nossos produtos, seu pet terá todo o conforto no seu novo lar!
				</p>
			</div>

			<div class="row mt-5">
				<section class="adoption-container">
					<h3>Produtos</h3>
					<p>Escolha o item ideal pra você e seu pet</p>
				</section>

			</div>

			<div id="products-loading"></div>

			<div id="products-list" class="row mt-5 mb-5">
			</div>

		</div>
		<footer>
			2023 Instituição 4Patas. Todos os direitos reservados.
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
		</script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"
			integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="assets/JS/utils.js" defer></script>
		<script src="assets/JS/products.js" defer></script>
</body>

</html>
