$(document).ready(function (){
    $("#descripcion").show();
    $("#caracteristicas").hide();
    $("#especificaciones").hide();
    $("#descargas").hide();
    $("#comentarios").hide();

    $("#Mostrardescripcion").click(function() {
        $("#descripcion").show();
        $("#caracteristicas").hide();
        $("#especificaciones").hide();
        $("#descargas").hide();
        $("#comentarios").hide();    
    });

    $("#Mostrarcaracteristicas").click(function() {
        $("#caracteristicas").show();
        $("#descripcion").hide();
        $("#especificaciones").hide();
        $("#descargas").hide();
        $("#comentarios").hide();    
    });

    $("#Mostrarespecificaciones").click(function() {
        $("#especificaciones").show();
        $("#descripcion").hide();
        $("#caracteristicas").hide();
        $("#descargas").hide();
        $("#comentarios").hide();    
    });
    $("#Mostrarcomentarios").click(function() {
        $("#comentarios").show();
        $("#descripcion").hide();
        $("#caracteristicas").hide();
        $("#especificaciones").hide();
        $("#descargas").hide();
    });
    $("#Mostrardescargas").click(function(){
        $("#descargas").show();
        $("#descripcion").hide();
        $("#caracteristicas").hide();
        $("#especificaciones").hide();
        $("#comentarios").hide();
    });

});
