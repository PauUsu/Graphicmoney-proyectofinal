<?php
    if(isset($_POST['guardar'])){
        $nombres=mysqli_real_escape_string($con,(strip_tags($_POST['nombres'],ENT_QUOTES)));
        $apellidos=mysqli_real_escape_string($con,(strip_tags($_POST['apellidos'],ENT_QUOTES)));
        $empresa=mysqli_real_escape_string($con,(strip_tags($_POST['empresa'],ENT_QUOTES)));
        $sexo=mysqli_real_escape_string($con,(strip_tags($_POST['sexo'],ENT_QUOTES)));
        $telefono=mysqli_real_escape_string($con,(strip_tags($_POST['telefono'],ENT_QUOTES)));
        $email=mysqli_real_escape_string($con,(strip_tags($_POST['email'],ENT_QUOTES)));
        $direccion=mysqli_real_escape_string($con,(strip_tags($_POST['direccion'],ENT_QUOTES)));
        
        $insert=mysqli_query($con, "INSERT INTO servicios(nombres,apellidos,empresa,sexo,telefono,email,direccion) 
        VALUES ('$nombres', '$apellidos','$empresa','$sexo','$telefono','$email','$direccion')");
        if($insert){
            echo'dato guardado con exito';
        }else{
            echo'error al guardar';
        }
    }
?>

<div class="formulario" id="contactanos">
            <form method="post">
        <div class="form-gr oup">
        <h2 class="class titulo-seccion">¡Déjanos tus datos para ponernos en contacto contigo!</h2>
        <label for="exampleInputEmail1"><i class="fa-solid fa-user"></i>Nombres</label>
        <input type="text" class="form-control" name="nombres">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1"><i class="fa-solid fa-user"></i>Apellidos</label>
        <input type="text" class="form-control" name="apellidos">
        </div>                                                          
        <div class="form-group">
         <label for="exampleInputPassword1"><i class="fa-sharp fa-solid fa-building"></i>Empresa</label>
         <input type="text" class="form-control" name="empresa">
         </div>
         <div class="form-group">
         <label for="exampleInputPassword1"><i class="fa-sharp fa-regular fa-restroom"></i>Sexo</label>
         <input type="text" class="form-control" name="sexo">
         </div>
         <div class="form-group">
         <label for="exampleInputPassword1"><i class="fa-solid fa-phone-volume"></i>Telefono</label>
         <input type="text" class="form-control" name="telefono">
         </div>
         <div class="form-group">
         <label for="exampleInputPassword1"><i class="fa-solid fa-envelope"></i>Email</label>
         <input type="text" class="form-control" name="email">
         </div>
         <div class="form-group">
         <label for="exampleInputPassword1"><i class="fa-solid fa-location-dot"></i>Direccion</label>
         <input type="text" class="form-control" name="direccion">
         </div>
         <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
        </form>
        
    </div>
