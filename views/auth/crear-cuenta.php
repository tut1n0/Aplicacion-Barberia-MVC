<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-cuenta">Completa el siguiente formulario</p>

<?php  

    include_once __DIR__ . "/../templates/alertas.php"

?>

<form class="formulario" action="/crear-cuenta" method="POST">

    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo s($usuario->nombre); ?>"/>
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo s($usuario->apellido); ?>"/>
    </div>

    <div class="campo">
        <label for="telefono">Telefono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu Nro de Telefonico" value="<?php echo s($usuario->telefono); ?>"/>
    </div>

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu Correo" value="<?php echo s($usuario->email); ?>"/>
    </div>

    <div class="campo">
        <label for="password">Crea un Password</label>
        <input type="password" id="password" name="password" placeholder="Ingresa un Password"/>
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion</a>
    <a href="/olvide">Olvide mi password</a>
</div>