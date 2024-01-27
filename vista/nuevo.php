<?php  require_once("layout/header.php");?>

<h1>huerta</h1>

<form action="">

    <label for="">lote:</label>
    <input type="text" name="lote"><br>
    
    <label for="">direccion:</label>
    <input type="text" name="direccion"><br>

    <label for="">tipo_cultivo:</label>
    <input type="text" name="tipo_cultivo"><br>

    <label for="">descripcion:</label>
    <input type="text" name="descripcion"><br>

    <label for="">cantidad:</label>
    <input type="text" name="cantidad"><br>

    <label for="">fecha:</label>
    <input type="text" name="fecha"><br>
    
    <input type="submit" name="btn">
    <input  type="hidden" name="m" value="store">

</form>
<?php  require_once("layout/footer.php");?>