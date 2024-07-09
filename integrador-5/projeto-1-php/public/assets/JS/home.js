window.onload = function() {
	fetchPets();
}

function fetchPets() {
	displayLoadingPets();

	$.ajax({
		url: '/api/v1/pets/highlights',
		type: 'GET',
		dataType: 'json',
		success: function() {
			console.log("Sucesso ao obter pets.");
			hideLoadingPets();
		},
		error: function(status, error) {
			console.log("Erro ao obter pets.");
			console.log("Status: ", status);
			console.log("Erro: ", error);
		}
	}).then(function(data) {
		var pets = data.pets;
		var petsList = document.getElementById('pets-list');
		for (var i = 0; i < pets.length; i++) {
			var pet = pets[i][0];
			var petCard = document.createElement('div');
			petCard.className = 'col-sm-6 col-md-6 col-lg-4 mb-4';
			petCard.innerHTML = `
				<div class="card">
					<img src="./assets/Images/pets/${pet.photo}" class="card-img-top" alt="${pet.name}">
					<div class="card-body">
						<h5 class="card-title">${pet.name}</h5>
						<p class="card-text">${pet.description}</p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><b>Idade</b>: ${pet.age}</li>
							<li class="list-group-item"><b>Porte</b>: ${pet.size}</li>
							<li class="list-group-item"></li>
						</ul>
						<a href="#" class="btn donation">Conhecer</a>
					</div>
				</div>
			`;
			petsList.appendChild(petCard);
		}
	});
}

function displayLoadingPets() {
	var loading = document.getElementById('pets-loading');
	loading.innerHTML = `
		<div class="col-12 text-center">
			<div class="spinner-border text-primary" role="status">
			</div>
		</div>
	`;
}

function hideLoadingPets () {
	var loading = document.getElementById('pets-loading');
	loading.innerHTML = '';
}


// html template for pet card
// <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
// 					<div class="card">
// 						<img src="./assets/Images/<?php echo $pet['photo']; ?>" class="card-img-top" alt="<?php echo $pet['name']; ?>">
// 						<div class="card-body">
// 							<h5 class="card-title"><?php echo $pet['name']; ?></h5>
// 							<p class="card-text"><?php echo $pet['description']; ?></p>
// 							<ul class="list-group list-group-flush">
// 								<li class="list-group-item"><b>Idade</b>: <?php echo $pet['age']; ?></li>
// 								<li class="list-group-item"><b>Porte</b>: <?php echo $pet['size']; ?></li>
// 								<li class="list-group-item"></li>
// 							</ul>
// 							<a href="#" class="btn donation">Conhecer</a>
// 						</div>
// 					</div>
// 				</div>
