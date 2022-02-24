const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

// expresiones regulares para evaluar los campos
const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,16}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,16}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	cantidad: /^\d{1,4}$/, // Solo de 1 a 4 digitos numericos
	telefono:/^\d{7,14}$/ // Solo de 7 a 14 digitos numericos.
}

// Campo bandera para saber si estan correctos los campos
const campos = {
	nombre: false,
	apellido: false,
	correo: false,
	cantidad: false,
    categoria: false,
	telefono: false
}

// Validacion de categoria aparte porque no lleva las palomitas
const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
        case "cantidad":
			validarCampo(expresiones.cantidad, e.target, 'cantidad');
			cantidadCero ();
		break;
        case "categoria":
			validarTipo();
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const cantidadCero = () => {
    if (document.getElementById('cantidad').value == '0' || document.getElementById('cantidad').value == '') {
        document.getElementById('grupo__cantidad').classList.remove('formulario__grupo-correcto');
        document.getElementById('grupo__cantidad').classList.add('formulario__grupo-incorrecto');
        document.querySelector('#grupo__cantidad .formulario__input-error').classList.add('formulario__input-error-activo');
        campos.cantidad = false;
	} else {
		document.getElementById('grupo__cantidad').classList.remove('formulario__grupo-incorrecto');
		document.getElementById('grupo__cantidad').classList.add('formulario__grupo-correcto');
		document.querySelector('#grupo__cantidad .formulario__input-error').classList.remove('formulario__input-error-activo');
		campos.cantidad = true;
	}   
}

const validarTipo = () => {
    if (document.getElementById('categoria').value == 'Estudiante' || document.getElementById('categoria').value == 'Trainee' || document.getElementById('categoria').value == 'Junior' || document.getElementById('categoria').value == ''){
        document.getElementById('grupo__categoria').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__categoria').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__categoria .formulario__input-error').classList.remove('formulario__input-error-activo');
		campos.categoria = true;   
    } else {
        document.getElementById('grupo__categoria').classList.remove('formulario__grupo-correcto');
        document.getElementById('grupo__categoria').classList.add('formulario__grupo-incorrecto');
        document.querySelector('#grupo__categoria .formulario__input-error').classList.add('formulario__input-error-activo');
        campos.categoria = false;
    }
}


function myFunction() {
	document.getElementById("categoria").value = "";
  }

// Validacion de si levantas una tecla o le das click fuera del formulario
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
    if(campos.nombre && campos.apellido && campos.correo && campos.cantidad && campos.categoria){
/*		formulario.reset();*/
        calcularFormulario ();
		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		}, 5000);
	}
});

// Calcula el total segun la categoria aplica el 80, el 50 o el 15% de descuento
const calcularFormulario = () => {
    var cantTickets = document.getElementById('cantidad');
    cantTickets = Number(cantTickets.value);
    var tipoTickets = document.getElementById('categoria');
    switch (tipoTickets.value) {
		case "Estudiante":
			var totalTicket = cantTickets * 40;
		break;
		case "Trainee":
			var totalTicket = cantTickets * 100;
		break;
		case "Junior":
			var totalTicket = cantTickets * 170;
		break;
		case "":
			var totalTicket = cantTickets * 200;
		break;
	}
    document.getElementById('botonpagar').innerHTML = 'Total a pagar: $ ' + totalTicket;
}

// Durante el reset elimino los check ya que el reset no lo hace y blanqueo el total, le devuelvo a los campos sus valores originales
formulario.addEventListener('reset', () => {
  
	document.getElementById('grupo__cantidad').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__cantidad').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__cantidad .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.cantidad = false;
	document.getElementById('grupo__categoria').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__categoria').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__categoria .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.categoria = false;
	document.getElementById('grupo__nombre').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__nombre').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__nombre .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.nombre = false;
	document.getElementById('grupo__apellido').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__apellido').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__apellido .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.apellido = false;
	document.getElementById('grupo__correo').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__correo').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__correo .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.correo = false;
	document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
        icono.classList.remove('formulario__grupo-correcto');
    });
    document.getElementById('botonpagar').innerHTML = 'Total a pagar: $            '
})