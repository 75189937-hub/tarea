const select = document.querySelectorAll('.select ');

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



//--------------------------------------------------------------------------------------------------


const monthElement =
document.getElementById("mes");

const daysElement =
document.getElementById("days");

const prevButton =
document.querySelector(".izquierda");

const nextButton =
document.querySelector(".derecha");


// FECHA ACTUAL
let currentDate = new Date();


// NOMBRES DE LOS MESES
const monthNames = [

  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre"

];


// FUNCION PRINCIPAL
function renderCalendar(){

    // AÑO ACTUAL
    const year =
    currentDate.getFullYear();

    // MES ACTUAL
    const month =
    currentDate.getMonth();


    // MOSTRAR MES
    monthElement.textContent =
    `${monthNames[month]} ${year}`;


    // PRIMER DIA DEL MES
    const firstDay =
    new Date(year, month, 1).getDay();


    // TOTAL DIAS DEL MES
    const lastDate =
    new Date(year, month + 1, 0).getDate();


    // LIMPIAR GRID
    daysElement.innerHTML = "";


    // ESPACIOS VACIOS
    for(let i = 0; i < firstDay; i++){

        const empty =
        document.createElement("div");

        daysElement.appendChild(empty);

    }


    // GENERAR DIAS
    for(let day = 1; day <= lastDate; day++){

        const dayElement =
        document.createElement("div");

        dayElement.classList.add("day");

        dayElement.textContent = day;


        // CLICK EN FECHA
        dayElement.addEventListener("click", ()=>{

            // QUITAR ACTIVE ANTERIOR
            document
            .querySelectorAll(".day")
            .forEach(d => {
                d.classList.remove("active");
            });


            // ACTIVAR DIA
            dayElement.classList.add("active");


            // FECHA COMPLETA
            const selectedDate =
            `${day}/${month + 1}/${year}`;


            // CAMBIAR TEXTO
            document.querySelector(
              ".calendario__boton"
            ).innerHTML =

            `<i class="fa-regular fa-calendar"></i>
             ${selectedDate}`;

        });


        // INSERTAR DIA
        daysElement.appendChild(dayElement);

    }

}


// BOTON IZQUIERDA
prevButton.addEventListener("click", ()=>{

    currentDate.setMonth(
      currentDate.getMonth() - 1
    );

    renderCalendar();

});


// BOTON DERECHA
nextButton.addEventListener("click", ()=>{

    currentDate.setMonth(
      currentDate.getMonth() + 1
    );

    renderCalendar();

});


// INICIAR
renderCalendar();
//--------------------------------------------------------------------------------------------------
const boton = document.querySelector('.calendario__boton');

const calendario = document.querySelector('.calendario__lista');

boton.addEventListener('click',()=>{

    calendario.classList.toggle('active');
    boton.classList.toggle('active');
    

});
document.addEventListener('click', (e)=>{

    if(
        !calendario.contains(e.target)
        &&
        !boton.contains(e.target)
    ){

        calendario.classList.remove('active');

        boton.classList.remove('active');
    }
});
