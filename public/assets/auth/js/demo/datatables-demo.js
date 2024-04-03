// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      "lengthMenu": "Visualizar _MENU_ registos por página",
      "zeroRecords": "Nada encontrado - lamento",
      "info": "A mostrar página _PAGE_ de _PAGES_",
      "infoEmpty": "Não há registos disponíveis",
      "infoFiltered": "(filtered from _MAX_ total records)",
      "search": "Pesquisar:",
      "previous": "Anterior",
      "next": "Próximo"
  }
  });
  
});


