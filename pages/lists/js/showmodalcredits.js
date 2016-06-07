
function loadDataModel(button){
  var currentbutton = $(button); // Botón que activó el modal
	var banco = currentbutton.data('banco');

  var modal = $('#modalCredit')
      modal.find('.modal-title').text(banco);
		  modal.find('#banco').val(banco);


}
