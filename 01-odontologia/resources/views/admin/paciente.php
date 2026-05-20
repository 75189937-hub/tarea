<?php
require_once '../../resources/controllers/admin/adminPacienteController.php';
?>

<section class="paciente ">
    <div class="paciente__contenedor pt-9 pb-9 contenedor">
        <div class="paciente__contenedor__contenido">
        <div class="paciente__contenedor__contenido__text">
            <?php if(isset($_SESSION['nombres'])) : ?>
                <h1>
                    Hola, <?php echo $_SESSION['nombres']; ?>
                </h1>
            <?php else : ?>
                <h1>
                    Hola, usuario
                </h1>
            <?php endif; ?>
            <p>
                Aquí puedes gestionar tus citas y ver tu odontólogo asignado.
            </p>
        </div>
    </div>

    <div class="paciente__contenedor__contenido__cantidad">
        <div class="paciente__contenedor__contenido__cantidad__primero">
            <h1><?php echo $total['total']; ?></h1>
            <p>Total citas</p>
        </div>
        <div class="paciente__contenedor__contenido__cantidad__primero">
            <h1><?php echo $pendientes['total']; ?></h1>
            <p>Pendientes</p>
        </div>
        <div class="paciente__contenedor__contenido__cantidad__primero">
            <h1><?php echo $confirmadas['total']; ?></h1>
            <p>Confirmadas</p>
        </div>
        <div class="paciente__contenedor__contenido__cantidad__primero">
            <h1><?php echo $completadas['total']; ?></h1>
            <p>Completadas</p>
        </div>
    </div>

    <div class="paciente__contenedor__contenido__citas">
        <div class="paciente__contenedor__contenido__citas__cliente">
            <h3>Mis citas</h3>
            <?php while($cita = mysqli_fetch_assoc($resultadoCitas)) : ?>
                <div 
                class="paciente__contenedor__contenido__citas__cliente__orden"
                data-servicio="<?php echo $cita['servicio_nombre']; ?>"
                data-fecha="<?php echo $cita['fecha']; ?>"
                data-hora="<?php echo date('H:i', strtotime($cita['hora'])); ?>"
                data-estado="<?php echo ucfirst($cita['estado']); ?>"
                data-odontologo="<?php echo $cita['odontologo_nombre']; ?>"
                >
                    <div class="paciente__contenedor__contenido__citas__cliente__orden__info">
                        <div class="paciente__contenedor__contenido__citas__cliente__orden__info--primero">
                            <div class="orden">
                                <?php echo ucfirst($cita['estado']); ?>
                            </div>
                            <span>
                                <?php echo $cita['servicio_nombre']; ?>
                            </span>
                        </div>
                        <div class="paciente__contenedor__contenido__citas__cliente__orden__info--segundo">
                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                <p>
                                    <?php echo $cita['fecha']; ?>
                                </p>
                            </span>
                            <span>
                                <i class="fa-regular fa-clock"></i>
                                <p>
                                    <?php echo date("H:i", strtotime($cita['hora'])); ?>
                                </p>
                            </span>
                            <span>
                                <i class="fa-solid fa-stethoscope"></i>
                                <p>
                                    <?php echo $cita['odontologo_nombre']; ?>
                                </p>
                            </span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            <?php endwhile; ?>
        </div>
       
        <div class="paciente__contenedor__contenido__citas__detalle">
            <h3>Detalle</h3>
            <div class="paciente__contenedor__contenido__citas__detalle__empty" id="detalleEmpty">
                <p>
                    Selecciona una cita para ver el detalle y el perfil de tu odontólogo.
                </p>
            </div>
            <div class="paciente__contenedor__contenido__citas__detalle__cliente"id="detalleCard"style="display:none;">

                <div class="paciente__contenedor__contenido__citas__detalle__cliente--text">
                    <h4>Cita</h4>
                    <p>Servicio:
                        <strong class= " black "id="detalleServicio">-</strong>
                    </p>

                    <p class = "mt-2">
                        Fecha:
                        <strong class= "black" id="detalleFecha">-</strong>
                    </p>

                    <p class = "mt-2">
                        Hora:
                        <strong  class= "black" id="detalleHora">-</strong>
                    </p>

                    <p class = "mt-2">
                        Estado:
                        <strong  class= "black" id="detalleEstado">-</strong>
                    </p>

                </div>

                <div class="paciente__contenedor__contenido__citas__detalle__cliente--text mt-4">

                    <h4>Tu Odontólogo</h4>
                        <div class = "otro">
                            <i class="fa-regular fa-user"></i><strong id="detalleOdontologo">-</strong>
                        </div>
                </div>

            </div>

        </div>

    </div>
</div>
</section>