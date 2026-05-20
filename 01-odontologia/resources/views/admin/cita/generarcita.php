<section class="generarcita pt-9 pb-9 contenedor">

    <div class="generarcita_header text pb-3 pt-8">
        <h3>Agendar Cita</h3>
        <h1>Reserva tu consulta</h1>
        <p>Elige tu odontólogo de preferencia y el horario que mejor te convenga.</p>
    </div>

    <div class="generarcita__contenedor pt-4 pb-8">

        <div class="generarcita__contenedor__primero">

            <!-- ODONTOLOGOS -->
            <div class="generarcita__contenedor__primero__contiene">

                <div class="elige-odontologo">
                    <h2><span>1</span>Elige tu odontólogo</h2>
                    <p>Selecciona al especialista de tu preferencia</p>
                </div>

                <div class="generarcita__contenedor__primero__contiene__cuadros">

                    <!-- ODONTOLOGO 1 -->
                    <button
                    type="button"
                    data-id="1"
                    class="generarcita__contenedor__primero__contiene__cuadros__espe">

                        <span class="generarcita__contenedor__primero__contiene__cuadros__espe__icon">
                            <i class="fa-regular fa-user"></i>
                        </span>

                        <div class="generarcita__contenedor__primero__contiene__cuadros__espe__text">

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--uno">
                                Dr. Ricardo Ramírez
                            </p>

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--dos">
                                Implantología · Cirugía Oral
                            </p>

                        </div>

                        <i class="fa-solid fa-check hola"></i>

                    </button>


                    <!-- ODONTOLOGO 2 -->
                    <button
                    type="button"
                    data-id="2"
                    class="generarcita__contenedor__primero__contiene__cuadros__espe">

                        <span class="generarcita__contenedor__primero__contiene__cuadros__espe__icon">
                            <i class="fa-regular fa-user"></i>
                        </span>

                        <div class="generarcita__contenedor__primero__contiene__cuadros__espe__text">

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--uno">
                                Dr. Camila Lopez
                            </p>

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--dos">
                                Ortodoncia
                            </p>

                        </div>

                        <i class="fa-solid fa-check hola"></i>

                    </button>


                    <!-- ODONTOLOGO 3 -->
                    <button
                    type="button"
                    data-id="3"
                    class="generarcita__contenedor__primero__contiene__cuadros__espe">

                        <span class="generarcita__contenedor__primero__contiene__cuadros__espe__icon">
                            <i class="fa-regular fa-user"></i>
                        </span>

                        <div class="generarcita__contenedor__primero__contiene__cuadros__espe__text">

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--uno">
                                Dr. Jean Manyari
                            </p>

                            <p class="generarcita__contenedor__primero__contiene__cuadros__espe__text--dos">
                                Endodoncia
                            </p>

                        </div>

                        <i class="fa-solid fa-check hola"></i>

                    </button>

                </div>

            </div>


            <!-- FORMULARIO -->
            <form
            class="generarcita__contenedor__primero__pregunta mt-3"
            method="post">

                <!-- INPUTS HIDDEN -->
                <input type="hidden" name="odontologo" id="odontologo" required>

                <input type="hidden" name="servicio" id="servicio" required>

                <input type="hidden" name="fecha" id="fecha" required>

                <input type="hidden" name="hora" id="hora" required>


                <div class="elige-odontologo">
                    <h2><span>2</span>Datos de la cita</h2>
                    <p>Completa tu información de contacto</p>
                </div>

                <div class="generarcita__contenedor__primero__pregunta__datos">

                    <!-- NOMBRE -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form">

                        <label for="nombre">Nombre</label>

                        <input
                        type="text"
                        id="nombre"
                        placeholder="Tu nombre"
                        name="nombre"
                        required>

                    </div>


                    <!-- EMAIL -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form">

                        <label for="email">Email</label>

                        <input
                        type="email"
                        id="email"
                        placeholder="Tu email"
                        name="email"
                        required>

                    </div>


                    <!-- TELEFONO -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form">

                        <label for="telefono">Teléfono</label>

                        <input
                        type="tel"
                        id="telefono"
                        placeholder="Tu teléfono"
                        name="telefono"
                        required>

                    </div>


                    <!-- SERVICIOS -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form">

                        <label for="servicio">Servicio *</label>

                        <div class="generarcita__contenedor__primero__pregunta__datos__campo__select select">

                            <div>
                                Selecciona un servicio
                                <i class="fa-solid fa-angle-down"></i>
                            </div>

                            <ul>
                                <li>Limpieza Dental</li>
                                <li>Blanqueamiento</li>
                                <li>Ortodoncia</li>
                                <li>Endodoncia</li>
                                <li>Implantes Dentales</li>
                                <li>Extracción Dental</li>
                                <li>Consulta General</li>
                            </ul>

                        </div>

                    </div>


                    <!-- FECHA -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form">

                        <label for="fecha">Fecha Preferida</label>

                        <div class="calendario">

                            <div class="calendario__boton">
                                <i class="fa-regular fa-calendar"></i>
                                Selecciona una fecha
                            </div>

                            <div class="calendario__lista" id="calendarCard">

                                <div class="calendario__lista__header">

                                    <div class="izquierda">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </div>

                                    <div class="mes-titulo" id="mes"></div>

                                    <div class="derecha">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>

                                </div>

                                <ul>
                                    <li>LU</li>
                                    <li>MA</li>
                                    <li>MI</li>
                                    <li>JU</li>
                                    <li>VI</li>
                                    <li>SA</li>
                                    <li>DO</li>
                                </ul>

                                <div
                                class="calendario__lista__grid"
                                id="days"></div>

                            </div>

                        </div>

                    </div>


                    <!-- HORA -->
                    <div class="generarcita__contenedor__primero__pregunta__datos__campo form mb-2">

                        <label for="hora">Hora Preferida</label>

                        <div class="generarcita__contenedor__primero__pregunta__datos__campo__select select">

                            <div>
                                <i class="fa-regular fa-clock"></i>
                                Selecciona una hora
                                <i class="fa-solid fa-angle-down"></i>
                            </div>

                            <ul>
                                <li>9:00 AM</li>
                                <li>9:30 AM</li>
                                <li>10:00 AM</li>
                                <li>10:30 AM</li>
                                <li>11:00 AM</li>
                                <li>11:30 AM</li>
                                <li>12:00 PM</li>
                                <li>12:30 PM</li>
                                <li>14:00 PM</li>
                                <li>14:30 PM</li>
                                <li>15:00 PM</li>
                                <li>15:30 PM</li>
                                <li>16:00 PM</li>
                                <li>16:30 PM</li>
                                <li>17:00 PM</li>
                                <li>17:30 PM</li>
                            </ul>

                        </div>

                    </div>

                </div>


                <!-- NOTA -->
                <div class="generarcita__contenedor__primero__pregunta__nota mt-3">

                    <div class="generarcita__contenedor__primero__pregunta__nota__campo form">

                        <label for="nota">Notas Adicionales</label>

                        <textarea
                        id="nota"
                        name="nota"
                        placeholder="¿Tienes alguna condición médica o nota especial?"></textarea>

                    </div>

                </div>


                <!-- ANUNCIO -->
                <div class="generarcita__contenedor__primero__pregunta__anuncio mt-3">

                    <i class="fa-solid fa-stethoscope"></i>

                    <p>
                        Odontólogo seleccionado:
                        <span id="odontologoNombre">
                            Dr. Juan Pérez
                        </span>
                    </p>

                </div>


                <!-- BOTON -->
                <button
                type="submit"
                class="generarcita__contenedor__primero__pregunta__boton btnceleste">

                    Confirmar Cita

                </button>

            </form>

        </div>
        <div class="generarcita__contenedor__segundo">
                <div class="generarcita__contenedor__segundo__info">
                    <h3>Información de contacto</h3>
                    <ul>
                        <li><i class="fa-solid fa-earth-americas"></i> <div><p class="primero">Dirección</p><p class="segundo">Av. Principal 1234, Centro Médico, Piso 3</p></div></li>
                        <li class = "mt-2"><i class="fa-solid fa-phone"></i> <div><p class="primero">Teléfono</p><p class="segundo">+1 (234) 567-89</p></div></li>
                        <li class = "mt-2"><i class="fa-regular fa-envelope"></i> <div><p class="primero">Correo Electrónico</p><p class="segundo">info@odontologia.com</p></div></li>
                        <li class = "mt-2"><i class="fa-regular fa-clock"></i> <div><p class="primero">Horario</p><p class="segundo">Lunes a Viernes: 8:00 AM - 8:00 PM</p></div></li>
                    </ul>
                </div>
                <div class="generarcita__contenedor__segundo__bono">
                    <h3>Primera consulta gratuita</h3>
                    <p class="segundo">Tu primera visita incluye evaluación completa, radiografía panorámica digital y plan de tratamiento personalizado sin costo.</p>
                </div>
            </div>

    </div>

</section>
     