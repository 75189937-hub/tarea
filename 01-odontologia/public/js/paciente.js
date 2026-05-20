console.log("PACIENTE JS CARGADO");

document.addEventListener('DOMContentLoaded', () => {

    const citas = document.querySelectorAll(
    '.paciente__contenedor__contenido__citas__cliente__orden'
    );

    console.log(citas);

});
document.addEventListener('DOMContentLoaded', () => {

    const citas = document.querySelectorAll(
    '.paciente__contenedor__contenido__citas__cliente__orden'
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

    const detalleCard =
    document.getElementById('detalleCard');

    const detalleEmpty =
    document.getElementById('detalleEmpty');

    citas.forEach((cita) => {

        cita.addEventListener('click', () => {

            citas.forEach((item) => {
                item.classList.remove('active');
            });

            cita.classList.add('active');

            detalleEmpty.style.display = 'none';
            detalleCard.style.display = 'block';

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

});