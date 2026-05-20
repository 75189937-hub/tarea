<section class="paciente pt-9 pb-9 contenedor">
    
        <div class="paciente__contenedor ">
            
                
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
                <P>Aquí puedes gestionar tus citas y ver tu odontólogo asignado.</P>
               
            </div>
        </div>
        <div class="paciente__contenedor__cantidad">
            <div class="paciente__contenedor__cantidad__primero">
                <h1>0</h1>
                <p>Total citas</p>
            </div>
            <div class="paciente__contenedor__cantidad__primero">
                <h1>0</h1>
                <p>Pendientes</p>
            </div>
            <div class="paciente__contenedor__cantidad__primero">
                <h1>0</h1>
                <p>Confirmadas</p>
            </div>
            <div class="paciente__contenedor__cantidad__primero">
                <h1>0</h1>
                <p>Completadas</p>
            </div>
        </div>
        <div class="paciente__contenedor__citas">
            <div class="paciente__contenedor__citas__cliente">
                <h3>Mis citas</h3>
                <div class="paciente__contenedor__citas__cliente__orden ">
                    <div class="paciente__contenedor__citas__cliente__orden__info">
                    <div class="paciente__contenedor__citas__cliente__orden__info--primero">
                        <div class="orden">Pendiente</div>
                        <span>Endodoncia</span>
                    </div>
                    <div class="paciente__contenedor__citas__cliente__orden__info--segundo">
                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            <p>25 de marzo de 2026</p>
                        </span>
                        <span>
                            <i class="fa-regular fa-clock"></i>
                            <p>10:00</p>
                        </span>
                        <span>
                            <i class="fa-solid fa-stethoscope"></i>
                            <p>Dr. Ricardo Ramirez</p>
                        </span>
                    </div>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                
            </div>
            <div class="paciente__contenedor__citas__detalle">
                <h3>Detalle</h3>
                <div class="paciente__contenedor__citas__detalle__cliente">
                    <p>Selecciona una cita para ver el detalle y el perfil de tu odontólogo.</p>
                </div>

            </div>
        </div>
        <div class="paciente__contenedor__testimonio mt-10">

        </div>
    </section>