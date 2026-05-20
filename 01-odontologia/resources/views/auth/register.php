<section class="auth pt-9 pb-9 contenedor">
        <div class="auth__contenedor">
            <img src="../img/logo.png" alt="#">
            <h1>Create tu cuenta</h1>
            
            <div class="auth__contenedor__sesion mt-3">
				<?php showSwalMensaje(); ?>
        		<?php $res = postValidarRegistro(); ?>
                <form action="" method="post">
                    <div class="formGroup">
						<label for="nombres">Nombre Completo</label>
						<input type="text" id="nombres" placeholder="Tu Nombre" name="nombres" value = "<?php echo getDato($res, 1, 'nombres'); ?>">
						<div class = "error"> <?php echo getDato($res, 0, 'nombres'); ?></div>
					</div>
					<div class="formGroup">
						<label for="apellidos">Apellido Completo</label>
						<input type="text" id="apellidos" placeholder="Tu Apellido" name="apellidos" value = "<?php echo getDato($res, 1, 'apellidos'); ?>">
						<div class = "error"> <?php echo getDato($res, 0, 'apellidos'); ?></div>
					</div>
					<div class="formGroup">
						<label for="email">Email</label>
						<input type="email" id="email" placeholder="you@example.com" name="email" value = "<?php echo getDato($res, 1, 'email'); ?>">

						<div class = "error"> <?php echo getDato($res, 0, 'email'); ?></div>
					</div>
					<div class="formGroup">
						<label for="password">Contraseña</label>
						<input type="password" id="password" placeholder="Tu Contraseña" name="password" value = "<?php echo getDato($res, 1, 'password'); ?>">
						<div class = "error"> <?php echo getDato($res, 0, 'password'); ?></div>
					</div>
                    <div class="formGroup">
						<label for="confirmPassword">Confirma Contraseña</label>
						<input type="password" id="confirmPassword" placeholder="Confirma Tu Contraseña" name="confirmPassword">
						<div class = "error"> <?php echo getDato($res, 0, 'confirmPassword'); ?></div>
					</div>
					<div class="formGroup">
						<button type="submit" class="btn">Crea tu Cuenta</button>
					</div>
				</form>
                
            </div>
        </div>
    </section>