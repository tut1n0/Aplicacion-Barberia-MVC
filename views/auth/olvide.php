<h1 class="nombre-pagina">Olvide mi password</h1>
<p class="descripcion-pagina">Reestablecer Password</p>

<?php  

    include_once __DIR__ . "/../templates/alertas.php"

?>

<form class="formulario" action="/olvide" method="POST">
 
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">Volver al inicio</a>
    <a href="/crear-cuenta">Aun no tienes una cuenta? Crea una</a>
</div>