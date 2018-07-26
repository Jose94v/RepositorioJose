window.onload = function (){
  alert('Esta linkeada');
  var ocultar = document.getElementById('titular');
  ocultar.style.display = 'none';
  document.querySelector('#lechuza').style.filter = 'grayScale(100%)';
  var losInputs = document.querySelectorAll ('.formulario input')

    losInputsArray = Array.from(losInputs);
    losInputsArray.pop();
    losInputsArray.pop();

    console.log(losInputs);

    for (var input of losInputs) {
      input.style.backgroundColor = 'red';

    }

    var linkYT = document.querySelector('.icon.fa-youtube');
    console.log(linkYT);
    linkYT.setAttribute = ('href', 'https://YouTube.com');


var theForm = document.querySelector('.formulario');

  if (!theForm.hasAttribute('action')) {
    var actionValue = theForm.getAttribute('url');
    theForm.removeAttribute('url');
    theForm.setAttribute('action',actionValue);

  }

};
