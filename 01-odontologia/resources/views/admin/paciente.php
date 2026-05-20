<?php
require_once '../../resources/controllers/admin/adminPacienteController.php';
?>
<section class="paciente pt-9 pb-9 contenedor">
    <div class="paciente__contenedor">
        <div class="paciente__contenedor__text">
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

    <div class="paciente__contenedor__cantidad">
        <div class="paciente__contenedor__cantidad__primero">
            <h1><?php echo $total['total']; ?></h1>
            <p>Total citas</p>
        </div>
        <div class="paciente__contenedor__cantidad__primero">
            <h1><?php echo $pendientes['total']; ?></h1>
            <p>Pendientes</p>
        </div>
        <div class="paciente__contenedor__cantidad__primero">
            <h1><?php echo $confirmadas['total']; ?></h1>
            <p>Confirmadas</p>
        </div>
        <div class="paciente__contenedor__cantidad__primero">
            <h1><?php echo $completadas['total']; ?></h1>
            <p>Completadas</p>
        </div>
    </div>

    <div class="paciente__contenedor__citas">
        <div class="paciente__contenedor__citas__cliente">
            <h3>Mis citas</h3>
            <?php while($cita = mysqli_fetch_assoc($resultadoCitas)) : ?>
            <div class="paciente__contenedor__citas__cliente__orden">
                <div class="paciente__contenedor__citas__cliente__orden__info">
                    <div class="paciente__contenedor__citas__cliente__orden__info--primero">
                        <div class="orden">
                            <?php echo ucfirst($cita['estado']); ?>
                        </div>
                        <span>
                            <?php echo $cita['servicio_nombre']; ?>
                        </span>
                    </div>
                    <div class="paciente__contenedor__citas__cliente__orden__info--segundo">
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

        <div class="paciente__contenedor__citas__detalle">
            <h3>Detalle</h3>
            <div class="paciente__contenedor__citas__detalle__cliente">
                <div class="detalle-cita">
                <h4>Cita</h4>
                    <p>
                        Servicio:
                        <strong id="detalleServicio">-</strong>
                    </p>
                    <p>
                        Fecha:
                        <strong id="detalleFecha">-</strong>
                    </p>
                    <p>
                        Hora:
                        <strong id="detalleHora">-</strong>
                    </p>
                    <p>
                        Estado:
                        <strong id="detalleEstado">-</strong>
                    </p>
            </div>
            <div class="detalle-odontologo mt-4">
                <h4>Tu Odontólogo</h4>
                    <p id="detalleOdontologo">-</p>

            </div>

        </div>

        </div>

    </div>
    <div class="paciente__contenedor__testimonio mt-10">
    </div>
</section>