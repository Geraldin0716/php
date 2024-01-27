<form action="">

 <?php   foreach($dato as $va): ?>

    <label for="">lote:</label>
    <input type="text" name="lote" value="<?php echo $va['lote']; ?>"><br>
    
    <label for="">direccion:</label>
    <input type="text" name="direccion" value="<?php echo $va['direccion']; ?>"><br>

    <label for="">tipo_cultivo:</label>
    <input type="text" name="tipo_cultivo" value="<?php echo $va['tipo_cultivo']; ?>"><br>

    <label for="">descripcion:</label>
    <input type="text" name="descripcion" value="<?php echo $va['descripcion']; ?>"><br>

    <label for="">cantidad:</label>
    <input type="text" name="cantidad" value="<?php echo $va['cantidad']; ?>"><br>

    <label for="">fecha:</label>
    <input type="text" name="fecha" value="<?php echo $va['fecha']; ?>"><br>

    <input  type="hidden" name="id_huerta" value="<?php echo $va['id_huerta']; ?>">
    <input type="submit" name="btn" value="Actualizar">
    <?php   endforeach ?>

<input  type="hidden" name="m" value="update">
</form>

<?php  require_once("layout/footer.php");?>