<?php
require_once("modelo/index.php");

class modeloController{

        private $modelo;

        public function __construct(){
            $this->modelo = new Modelo();    
    }


        //Mostrar - Index

      static function index(){

        $huerta  = new Modelo();

        $dato = $huerta->mostrar("huerta",'1');
        

        require_once("vista/index.php");

      }  

      //Insertar

      static function nuevo(){

        require_once("vista/nuevo.php");

      }

      static function store(){
        
        $lote  = $_REQUEST['lote'];

        $direccion  = $_REQUEST['direccion'];

        $tipo_cultivo   = $_REQUEST['tipo_cultivo'];

        $descripcion  = $_REQUEST['descripcion'];

        $cantidad  = $_REQUEST['cantidad'];

        $fecha  = $_REQUEST['fecha'];

        $data = "'".$lote."','".$direccion."','".$tipo_cultivo."','".$descripcion."','".$cantidad."','".$fecha."'";

        $huerta = new Modelo();

        $dato = $huerta->insertar("huerta",$data);
        header("location:".urlsite);

      }


      //Actualizar 

      
      static function editar(){

        $id_huerta = $_REQUEST['id_huerta'];

        $huerta = new Modelo();

        $dato = $huerta -> mostrar("huerta","id_huerta=".$id_huerta);

        require_once("vista/editar.php");

      }

      static function update(){

        $id  = $_REQUEST['id_huerta'];

        $lote  = $_REQUEST['lote'];

        $direccion  = $_REQUEST['direccion'];

        $tipo_cultivo   = $_REQUEST['tipo_cultivo'];

        $descripcion  = $_REQUEST['descripcion'];

        $cantidad  = $_REQUEST['cantidad'];

        $fecha  = $_REQUEST['fecha'];

        $data = "lote='".$lote."',direccion=".$direccion."',tipo_cultivo='".$tipo_cultivo."',descripcion='".$descripcion."',cantidad='".$cantidad."',fecha='".$fecha;

        $condicion = "id_huerta=".$id_huerta;

        $huerta = new Modelo();

        $dato = $huerta->actualizar("huerta",$data, $condicion);
        header("location:".urlsite);

      }

      //Eliminar

      static function eliminar(){

        $id  = $_REQUEST['id_huerta'];

        $condicion = "id_huerta=".$id_huerta;

        $huerta = new Modelo();

        $dato = $huerta->eliminar("huerta", $condicion);
        header("location:".urlsite);
      }


}