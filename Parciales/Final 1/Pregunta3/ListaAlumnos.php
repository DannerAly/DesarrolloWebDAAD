<?php
session_start();
class Alumno {
    public $cu;
    public $nombres;
    public $apellidos;

    public function __construct($cu, $nombres, $apellidos) {
        $this->cu = $cu;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}

class ListaAlumnos {
    public $alumnos = array();
    
    public function __construct() {
        // Puedes iniciar con un alumno por defecto si es necesario
        // $this->nuevoAlumno = new Alumno("35-5281", "Danner Abel", "Aly Delgado");
        // $this->insertarAlumno($this->nuevoAlumno);
    }

    public function insertarAlumno($alumno) {
        array_push($this->alumnos, $alumno);
    }

    public function mostrarLista() {
        echo json_encode($this->alumnos, JSON_UNESCAPED_UNICODE);
        //print_r($this->alumnos);
    }

    public function eliminarAlumno($id) {
        if (isset($this->alumnos[$id])) {
            unset($this->alumnos[$id]);
            // Reindexar el array para mantener los índices correctos
            $this->alumnos = array_values($this->alumnos);
        } else {
            echo "No se encontró un alumno con el índice $id.";
        }
    }

}




?>
