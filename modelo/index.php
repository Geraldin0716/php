<?php

class Modelo{

    private $Modelo;
    private $db;

    public function __construct(){

        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=db_proyecto', "root", "");

    }

    public function insertar($tabla, $data){

        $consulta = "INSERT INTO ".$tabla." VALUES(null,".$data.")";
        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;
        }else{

            return false;
        }

    }


    public function mostrar($tabla, $condicion){

        $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";

        $resultado = $this->db->query($consulta);

        $filas = $resultado->FETCHALL(PDO::FETCH_ASSOC);       

        return $filas;
    }

    public function actualizar ($tabla, $data, $condicion){
        
        $consulta = "UPDATE ".$tabla." SET ".$data." WHERE ".$condicion;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;
        }else{

            return false;
        }

    }

    public function eliminar($tabla, $condicion){

        $consulta = "DELETE FROM ".$tabla." WHERE ".$condicion;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;
        }else{

            return false;
        }


    }





}


?>