const contenedorQR = document.getElementById('contenedorQR');
const usuario = document.getElementById('usuario');

const QR = new QRCode(contenedorQR);

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	QR.makeCode(usuario.link.value);
});
