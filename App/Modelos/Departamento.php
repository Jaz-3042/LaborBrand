<?php


namespace App\Modelos;


class Departamento
{
    Private $Nombre;
    Private $Codigo;

    /**
     * Departamento constructor.
     * @param $Nombre
     * @param $Codigo
     */
    public function __construct($Nombre, $Codigo)
    {
        $this->Nombre = $Nombre;
        $this->Codigo = $Codigo;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * @param mixed $Codigo
     */
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }
    public function MostarDatos()
    {
        echo "<H4>Los datos de la persona son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Nombres: </strong>".$this->getNombre()."</li>";
        echo   "<li><strong>Apellidos: </strong>".$this->getCodigo()."</li>";
        echo "</ul>";
}