window.onload = function () {
	var comboPaises = document.querySelector('[name=combo-paises]');
	var comboRegiones = document.querySelector('[name=combo-regiones]');
	var comboCiudades = document.querySelector ('[name=combo-ciudades]');

	fetchCall('http://pilote.techo.org/?do=api.getPaises', getPaises);

	function fetchCall(url, fn) {
		fetch(url)
			.then(function (response) {
				return response.json();
			})
			.then(function (respFinal) {
				fn(respFinal)
			})
			.catch(function (error) {
				console.error(error);
			})
	}

	function getPaises(objRespuesta) {
		var paises = objRespuesta.contenido;

		for (var key in paises) {
			comboPaises.innerHTML += `<option value="${paises[key]}"> ${key} </option>`
		}

		comboPaises.addEventListener('change', function () {
			var idPais = this.value;
			comboRegiones.innerHTML = '';
			comboCiudades.innerHTML = '';
			fetchCall(`http://pilote.techo.org/?do=api.getRegiones?idPais=${idPais}`, getRegiones);
		});
	}

	function getRegiones(objRespuesta) {
		var regiones = objRespuesta.contenido;

		for (var key in regiones) {
			comboRegiones.innerHTML += `<option value="${regiones[key]}"> ${key} </option>`
		}

		comboRegiones.addEventListener('change', function () {
			var idRegionLT = this.value;

			comboCiudades.innerHTML = '';
			fetchCall(`http://pilote.techo.org/?do=api.getCiudades?idRegionLT=${idRegionLT}`, getCiudades);
		});
	}

	function getCiudades(objRespuesta) {
		var ciudades = objRespuesta.contenido;

		for (var key in ciudades) {
			comboCiudades.innerHTML += `<option value="${ciudades[key]}"> ${key} </option>`
		}


	}







};
