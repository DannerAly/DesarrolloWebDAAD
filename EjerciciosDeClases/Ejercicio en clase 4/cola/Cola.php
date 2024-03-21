<?php
class Cola
{
    private $elementos;
    private $primero;
    private $ultimo;
    
    function __construct()
    {
        $this->elementos = array();
        $this->primero = 0;
        $this->ultimo = 0;
    }
    
    public function insertar($valor)
    {
        $this->elementos[$this->ultimo] = $valor;
        $this->ultimo++;
    }
    
    public function eliminar()
    {
        if ($this->primero == $this->ultimo) {
            return "La cola está vacía";
        } else {
            $valor = $this->elementos[$this->primero];
            $this->primero++;
            return $valor;
        }
    }

    public function imprimir()
    {
        for ($i = $this->primero; $i < $this->ultimo; $i++) {
            echo $this->elementos[$i]."<br>";
        }
    }
}
?>
