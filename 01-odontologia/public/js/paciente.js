const citas = document.querySelectorAll(
'.paciente__contenedor__citas__cliente__orden'
);

const detalleServicio =
document.getElementById('detalleServicio');

const detalleFecha =
document.getElementById('detalleFecha');

const detalleHora =
document.getElementById('detalleHora');

const detalleEstado =
document.getElementById('detalleEstado');

const detalleOdontologo =
document.getElementById('detalleOdontologo');

citas.forEach((cita) => {

    cita.addEventListener('click', () => {

        // quitar active
        citas.forEach((item) => {
            item.classList.remove('active');
        });

        // active actual
        cita.classList.add('active');

        // rellenar detalle
        detalleServicio.textContent =
        cita.dataset.servicio;

        detalleFecha.textContent =
        cita.dataset.fecha;

        detalleHora.textContent =
        cita.dataset.hora;

        detalleEstado.textContent =
        cita.dataset.estado;

        detalleOdontologo.textContent =
        cita.dataset.odontologo;

    });

});