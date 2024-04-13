<?php
// Incluye la clase Examen
require_once 'Examen.php';

// Verifica si se han enviado las cadenas desde el formulario
if (isset($_POST['cadena1']) && isset($_POST['cadena2'])) {
    // Crea un objeto Examen con las cadenas proporcionadas
    $examen = new Examen($_POST['cadena1'], $_POST['cadena2']);
    // Llama al método cruzar
    $examen->cruzar();
}
?>
