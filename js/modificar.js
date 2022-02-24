const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

// expresiones regulares para evaluar los campos
const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,25}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,25}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono:/^\d{7,14}$/, // Solo de 7 a 14 digitos numericos.
    dni:/^\d{5,10}$/, // Solo de 5 a 10 digitos numericos.
    clave:/^[a-zA-Z0-9_.+-]{4,12}$/
}

// Campo bandera para saber si estan correctos los campos
const campos = {
	nombre: true,
	apellido: true,
	correo: true,
    categoria: true,
	telefono: true,
    dni: true,
    clave: true
}

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
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
        case "dni":
			validarCampo(expresiones.dni, e.target, 'dni');
		break;
        case "clave":
			validarCampo(expresiones.clave, e.target, 'clave');
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

// Validacion de si levantas una tecla o le das click fuera del formulario
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
})


function valida(f) {
	var ok = true;
	if(campos.nombre && campos.apellido && campos.correo && campos.telefono && campos.clave && campos.dni){
		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		}, 5000);
		ok = false;
	}
	return ok;
}

// Durante el reset elimino los check ya que el reset no lo hace y blanqueo el total, le devuelvo a los campos sus valores originales
formulario.addEventListener('reset', () => {
  
	document.getElementById('grupo__dni').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__dni').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__dni .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.dni = true;
	document.getElementById('grupo__clave').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__clave').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__clave .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.clave = true;
	document.getElementById('grupo__nombre').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__nombre').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__nombre .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.nombre = true;
	document.getElementById('grupo__apellido').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__apellido').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__apellido .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.apellido = true;
	document.getElementById('grupo__correo').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__correo').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__correo .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.correo = true;
    document.getElementById('grupo__telefono').classList.remove('formulario__grupo-incorrecto');
	document.getElementById('grupo__telefono').classList.add('formulario__grupo-correcto');
	document.querySelector(`#grupo__telefono .formulario__input-error`).classList.remove('formulario__input-error-activo');
	campos.telefono = true;
	document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
        icono.classList.remove('formulario__grupo-correcto');
    });
})
