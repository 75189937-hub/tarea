const select = document.querySelectorAll('.select');

const inputServicio =
document.getElementById('servicio');

const inputHora =
document.getElementById('hora');

select.forEach((input, index) => {

    const div = input.querySelector('div');

    const ul = input.querySelector('ul');

    div.addEventListener('click', () => {

        ul.classList.toggle('active');

        div.classList.toggle('active');

    });

    ul.addEventListener('click', (e) => {

        if (e.target.tagName === 'LI') {

            const selected =
            ul.querySelectorAll('li');

            selected.forEach((li) => {

                const icon =
                li.querySelector('i');

                if (icon) icon.remove();

            });

            e.target.innerHTML +=
            '<i class="fa-solid fa-check"></i>';

            e.target.parentElement
            .parentElement
            .firstElementChild
            .innerHTML =
            `${e.target.textContent}
            <i class="fa-solid fa-angle-down"></i>`;

            // SERVICIO
            if(index === 0){

                inputServicio.value =
                Array.from(
                    e.target.parentElement.children
                ).indexOf(e.target) + 1;

            }

            // HORA
            if(index === 1){

                inputHora.value =
                e.target.textContent.trim();

            }

            ul.classList.remove('active');

            div.classList.remove('active');
        }
    });
});


//--------------------------------------------------
// ODONTOLOGOS
//--------------------------------------------------

const opciones =
document.querySelectorAll(
'.generarcita__contenedor__primero__contiene__cuadros__espe'
);

const textoSeleccionado =
document.getElementById('odontologoNombre');

const anuncio =
document.querySelector(
'.generarcita__contenedor__primero__pregunta__anuncio'
);

const inputOdontologo =
document.getElementById('odontologo');

opciones.forEach((btn) => {

    btn.addEventListener('click', () => {

        opciones.forEach((b) =>
            b.classList.remove('active')
        );

        btn.classList.add('active');

        const nombre =
        btn.querySelector(
        '.generarcita__contenedor__primero__contiene__cuadros__espe__text--uno'
        ).textContent;

        textoSeleccionado.textContent =
        nombre;

        anuncio.classList.add('active');

        // GUARDAR ID
        inputOdontologo.value =
        btn.dataset.id;

    });

});


//--------------------------------------------------
// CALENDARIO
//--------------------------------------------------

const monthElement =
document.getElementById("mes");

const daysElement =
document.getElementById("days");

const prevButton =
document.querySelector(".izquierda");

const nextButton =
document.querySelector(".derecha");

let currentDate = new Date();

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

function renderCalendar(){

    const year =
    currentDate.getFullYear();

    const month =
    currentDate.getMonth();

    monthElement.textContent =
    `${monthNames[month]} ${year}`;

    const firstDay =
    new Date(year, month, 1).getDay();

    const lastDate =
    new Date(year, month + 1, 0).getDate();

    daysElement.innerHTML = "";

    for(let i = 0; i < firstDay; i++){

        const empty =
        document.createElement("div");

        daysElement.appendChild(empty);

    }

    for(let day = 1; day <= lastDate; day++){

        const dayElement =
        document.createElement("div");

        dayElement.classList.add("day");

        dayElement.textContent = day;

        dayElement.addEventListener("click", ()=>{

            document
            .querySelectorAll(".day")
            .forEach(d => {
                d.classList.remove("active");
            });

            dayElement.classList.add("active");

            const selectedDate =
            `${day}/${month + 1}/${year}`;

            document.querySelector(
              ".calendario__boton"
            ).innerHTML =

            `<i class="fa-regular fa-calendar"></i>
             ${selectedDate}`;

            // GUARDAR FECHA
            document.getElementById("fecha").value =
            `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

        });

        daysElement.appendChild(dayElement);

    }

}

prevButton.addEventListener("click", ()=>{

    currentDate.setMonth(
      currentDate.getMonth() - 1
    );

    renderCalendar();

});

nextButton.addEventListener("click", ()=>{

    currentDate.setMonth(
      currentDate.getMonth() + 1
    );

    renderCalendar();

});

renderCalendar();


//--------------------------------------------------
// ABRIR CALENDARIO
//--------------------------------------------------

const boton =
document.querySelector('.calendario__boton');

const calendario =
document.querySelector('.calendario__lista');

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

