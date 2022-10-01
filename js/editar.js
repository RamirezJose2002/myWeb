$(".btnEditarComida").click(function(){
    var idE = $(this).attr("idEditar");
    var nombre = $('#nombre'+idE).text();
    var precio =$('#precio'+idE).text();
    $('#updateC').modal('show');
    $('#idEditarModal').val(idE);
    $('#nombreModal').val(nombre);
    $('#precioModal').val(precio);
    console.log(idE, nombre, precio);
})

$(".btnEditarBebida").click(function(){
    var idE = $(this).attr("idEditarB");
    var nombre = $('#nombreB'+idE).text();
    var precio =$('#precioB'+idE).text();
    $('#updateB').modal('show');
    $('#idEditarModalB').val(idE);
    $('#nombreModalB').val(nombre);
    $('#precioModalB').val(precio);

    console.log(idE, nombre, precio);

})