function borrarFila(id, iduser, tabla) {
    console.log(id);
    console.log(iduser);
    console.log(tabla);
    $.ajax({url:"borrarFila.php?id=" + id + "&iduser=" + iduser + "&tabla=" + tabla, success: function(){
        location.reload();
    }
    });
}

function mostrarModal(id, iduser, tabla, correo, total){
    Swal.fire({
    icon: 'warning',
    title: '¿Estás seguro de tu respuesta?',
    text: 'Este formulario desaparecerá cuando lo revises',
    showConfirmButton: false,
    showCancelButton: true,
    cancelButtonText: 'Cerrar',
    footer: "<a class='btn-ma btn" + id + iduser + "' href='mailto:" + correo + "?Subject=Respuesta%20a%20" + tabla + "&Body=Su%20puntaje%20fue%20" + total + "'>¡Enviar correo!</a>"
    });

    const a = document.querySelector(".btn" + id + iduser);
    a.onclick = function() {
        borrarFila(id, iduser, tabla);
    };
}