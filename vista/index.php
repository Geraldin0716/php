<?php  require_once("layout/header.php");?>

<a href="index.php?m=nuevo">Nuevo</a>


<table>
    <tr>
        <th>id_huerta</th>
        <th>lote</th>
        <th>direccion</th>
        <th>tipo_cultivo</th>
        <th>descripcion</th>
        <th>cantidad</th>
        <th>fecha</th>
        
    </tr>
    <?php
   //var_dump($dato);
        foreach ($dato as $va): 
            echo "<tr><td>".$va['id_huerta']."</td><td>".$va['lote']."</td><td>".$va['direccion']."</td><td>".$va['tipo_cultivo']."</td><td>".$va['descripcion']."</td><td>".$va['cantidad']."</td><td>".$va['fecha']."</td>";
            echo "<td><a href='index.php?m=editar&id_huerta=".$va['id_huerta']."'>Actualizar</a><a href='index.php?m=eliminar&id_huerta=".$va['id_huerta']."'> Eliminar</a></td>";
            echo "</tr>";   
    endforeach;
    ?>

</table>
<?php  require_once("layout/footer.php");?>