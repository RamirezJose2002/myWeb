$(".btnEditarComida").click(function(){
    var id = $(this).attr("idEditar");
    var nombre = $('#nombre'+id).text();
    var tipo = $('#tipo'+id).text();
    var precio = $('#precio'+id).text();

        
    console.log(id, nombre, tipo, precio);


})