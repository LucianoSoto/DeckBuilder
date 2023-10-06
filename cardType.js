function añadirOpcion(value, text){
    let opt = document.createElement('option');
    opt.value = value;
    opt.text = text;

    return opt;
}


function ocultarMostrarLabels(current, visibility){
    let labels = Array.from(document.querySelectorAll(current));
        labels.forEach(i =>{
            i.className = visibility;
            })
}

