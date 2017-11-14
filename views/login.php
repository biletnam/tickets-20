
<?php
    session_start();
    include "includes/header.php";
?>


<div class="login d-flex align-items-center">
    <form action="#" class="form-inline ">
        <div class="input-group">
            <div class="input-group-addon">@</div>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        </div>
        <div class="input-group">
            <div class="input-group-addon">@</div>
            <input type="text" class="form-control" name="password" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>


<?php
    include "includes/footer.php";
?>