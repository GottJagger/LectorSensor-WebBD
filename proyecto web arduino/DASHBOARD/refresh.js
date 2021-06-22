$(document).ready(function(){
                $('#boton1').click(function(){
                    $('#contenido').load("http://192.168.137.71/LED=ON");
                }); 
                $('#boton2').click(function(){
                    $('#contenido').load("http://192.168.137.71/LED=OFF");
                });    
});
