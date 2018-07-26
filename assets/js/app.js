// Challenge: Armar un IMAGE GALLERY
// How to: Al hacer clic en cada una de las imágenes "thumbnail" se deberá mostrar la misma dentro del contenedor principal.
// Para poder operar con el evento onclick, seguir la siguiente estructura:
/*
	myElement.onclick = function () {
		// mi lógica
	}
*/
// CAUTION: Tu script, debe ser funcional para cualquier cantidad de imágenes "thumbnail".
// Limit Time: 20 minutos.

// Ideal Result: en lo posible, lograr que al dar clic sobre una imagen "thumbnail", a ésa misma le sea aplicada la class 'active', mientras que a las demás imágenes se les deberá remover.
window.onload = function(){
  var contenedor = document.querySelector('.img-container');
  var imagenes = document.querySelectorAll('.img-thumbnails img');

  console.log('contenendor: ', contenedor)
  console.log('imagenes: ', imagenes)


  for (item of imagenes) {
    console.log(item)
    item.onclick = function () {
      var srcImg = this.getAttribute('src');

      contenedor.innerHTML = `<img src="${srcImg}">`;
    };
  };
};
