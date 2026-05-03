const select = document.querySelectorAll('.select');

select.forEach((input, index) => {
    const div = input.querySelector('div');
    const ul = input.querySelector('ul');
    div.addEventListener('click', () => {


        ul.classList.toggle('active');
        div.classList.toggle('active');
    });

    ul.addEventListener('click', (e) => {
        if (e.target.tagName === 'LI') {
            const selected = ul.querySelectorAll('li');
            selected.forEach((li) => {
                const icon = li.querySelector('i');
                if (icon) icon.remove();
            });
            e.target.innerHTML += '<i class="fa-solid fa-check"></i>';
            e.target.parentElement.parentElement.firstElementChild.innerHTML = `${e.target.textContent} <i class="fa-solid fa-angle-down"></i>`;

            ul.classList.remove('active');
            div.classList.remove('active');
        }
    });
})

const opciones = document.querySelectorAll('.generarcita__contenedor__primero__contiene__cuadros__espe');
const textoSeleccionado = document.getElementById('odontologoNombre');
const anuncio = document.querySelector('.generarcita__contenedor__primero__pregunta__anuncio');

opciones.forEach((btn) => {
    btn.addEventListener('click', () => {

        // quitar active a todos
        opciones.forEach((b) => b.classList.remove('active'));

        // agregar active solo al clickeado
        btn.classList.add('active');

        // obtener nombre del odontólogo
        const nombre = btn.querySelector('.generarcita__contenedor__primero__contiene__cuadros__espe__text--uno').textContent;

        // mostrar en el anuncio
        textoSeleccionado.textContent = nombre;
        // 👇 MOSTRAR ANUNCIO
        anuncio.classList.add('active');
    });
});