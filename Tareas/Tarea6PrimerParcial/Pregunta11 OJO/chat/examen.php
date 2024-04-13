<?php
// Clase Examen
class Examen {
    // Propiedades
    private $cadena1;
    private $cadena2;
    
    // Constructor
    public function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }
    
    // Método para cruzar las palabras
    public function cruzar() {
        // Busca la primera letra en común
        $letraComun = '';
        for ($i = 0; $i < strlen($this->cadena1); $i++) {
            $letra = $this->cadena1[$i];
            if (strpos($this->cadena2, $letra) !== false) {
                $letraComun = $letra;
                break;
            }
        }
        
        // Si no hay letras en común, muestra un mensaje y retorna
        if ($letraComun === '') {
            echo "No existen letras comunes";
            return;
        }
        
        // Imprime la tabla
        echo "[&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]";
        for ($i = 0; $i < strlen($this->cadena2); $i++) {
            if ($this->cadena2[$i] === $letraComun) {
                echo "[&nbsp;" . $this->cadena2[$i] . "&nbsp;]";
            } else {
                echo "[&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]";
            }
        }
        echo "<br>";
        
        // Imprime las letras de la primera cadena cruzadas
        for ($i = 0; $i < strlen($this->cadena1); $i++) {
            echo "[&nbsp;" . $this->cadena1[$i] . "&nbsp;]";
        }
    }
}

// Verifica si se han enviado las cadenas desde el formulario
if (isset($_POST['cadena1']) && isset($_POST['cadena2'])) {
    // Crea un objeto Examen con las cadenas proporcionadas
    $examen = new Examen($_POST['cadena1'], $_POST['cadena2']);
    // Llama al método cruzar
    $examen->cruzar();
}
?>
