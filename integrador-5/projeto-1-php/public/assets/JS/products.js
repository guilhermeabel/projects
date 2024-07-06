window.onload = function() {
	fetchProducts();
}

function fetchProducts() {
	displayLoadingProducts();

	$.ajax({
		url: '/api/v1/products/all',
		type: 'GET',
		dataType: 'json',
		success: function() {
			console.log("Sucesso ao obter produtos.");
			hideLoadingProducts();
		},
		error: function(status, error) {
			console.log("Erro ao obter produtos.");
			console.log("Status: ", status);
			console.log("Erro: ", error);
		}
	}).then(function(data) {
		var products = data.products;
		var productsList = document.getElementById('products-list');
		for (var i = 0; i < products.length; i++) {
			var product = products[i];
			var productCard = document.createElement('div');
			productCard.className = 'col-sm-6 col-md-6 col-lg-4 mb-4';
			productCard.innerHTML = `
				<div class="card">
					<img src="./assets/Images/products/${product.main_image}" class="card-img-top" alt="${product.name}">
					<div class="card-body">
						<h5 class="card-title">${product.name}</h5>
						<p class="card-text">${product.description}</p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">${numberToMoney(product.price)}</li>
						</ul>
						<a href="#" class="btn donation">Conhecer</a>
					</div>
				</div>
			`;
			productsList.appendChild(productCard);
		}
	});
}

function displayLoadingProducts() {
	var loading = document.getElementById('products-loading');
	loading.innerHTML = `
		<div class="col-12 text-center">
			<div class="spinner-border text-primary" role="status">
			</div>
		</div>
	`;
}

function hideLoadingProducts () {
	var loading = document.getElementById('products-loading');
	loading.innerHTML = '';
}
