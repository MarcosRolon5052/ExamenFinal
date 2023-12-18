$('#modalPagos').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    document.getElementById("montoModal").value = button.data('monto');
  })