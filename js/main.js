$(document).ready(function(){
    //sendData();
    //setInterval(getData,1000);
    $('.sidenav').sidenav();
    $('.modal').modal();
});

const sendData = () => {
    $('#enviar-datos').on('click', function(e) {
        e.preventDefault();
        var dataString = $('#ingresar-nota').serialize();
        alert('Datos serializados: '+dataString);
    }); 
}

const getData = () => {
    const datos = $.ajax({
        url: './back-app/_render-nota.php', //indicamos la ruta
            dataType: 'text',//indicamos que es de tipo texto plano
            async: false     //ponemos el parámetro asyn a falso
    }).responseText;
    //console.log(datos);
    //actualizamos el div que nos mostrará la hora actual
    document.getElementById("render").innerHTML = datos;
}