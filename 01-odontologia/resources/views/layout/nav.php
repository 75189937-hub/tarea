<nav class="nav pb-1 pt-1">
    <div class="nav__contenedor contenedor">
        <div class="nav__contenedor__menuIcon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
            <div class="nav__contenedor__menuIcon__circle"></div>
        </div>
        <img src="../img/logo.png" alt="#" class="nav__contenedor--logo">
        <div class="nav__contenedor__menu">
            <a href="./" class="nav__contenedor__menu--link">Inicio</a>
            <a href="./servicios" class="nav__contenedor__menu--link">Servicios</a>
            <a href="#" class="nav__contenedor__menu--link">Equipo</a>
            <a href="#" class="nav__contenedor__menu--link">Testimonios</a>
            <a href="#" class="nav__contenedor__menu--link">Contacto</a>
        </div>
        
         <div class="nav__contenedor__menucita">
            <?php if(isset($_SESSION['nombres'])) : ?>
                <a class="nav__contenedor__menu--link">Hola, <?php echo $_SESSION['nombres']; ?> </a>
                
                <a href="./cita" class="nav__contenedor__menucita--cita">Reservar Cita</a>
                <a href="./paciente" class="nav__contenedor__menucita--cita">Historial</a>
                <a href="../auth/logout" class="nav__contenedor__menu--link"> Salir
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
</svg>

                   
            </a>
            </div>

<?php else : ?>
        <div class="nav__contenedor__menucita">
            <a href="#" class="nav__contenedor__menucita--link">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                    +999999999
            </a>
            <a href="./portal" class="nav__contenedor__menucita--portal">Mi portal</a>
            <a href="#" class="nav__contenedor__menucita--cita">Agendar Cita</a>
        </div>
        <?php endif ; ?>
    </div>
</nav>