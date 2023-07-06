const banners = document.querySelectorAll(".banner");
const cuestionarios = document.querySelectorAll(".form-animated");

function mostrarCuestionario(index) {
    console.log(cuestionarios[index].style.height == "" || cuestionarios[index].style.height == "0px");
    if(cuestionarios[index].style.height == "" || cuestionarios[index].style.height == "0px"){
        let sectionHeight = cuestionarios[index].scrollHeight;

        cuestionarios.forEach(cuestionario => {
            cuestionario.style.height = null;
        });

        cuestionarios[index].style.height = sectionHeight + 'px';
    } else {
        console.log("ocultando " + index);
        cuestionarios[index].style.height = '0';
    }
    
}