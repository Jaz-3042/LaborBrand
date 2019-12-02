<?php


namespace App\Modelos;


class Orden_Servicio
{
    private $id;
    private $Fecha_Inicio;
    private $Fecha_Terminacion;

    /**
     * Orden_Servicio constructor.
     * @param $id
     * @param $Fecha_Inicio
     * @param $Fecha_Terminacion
     */
    public function __construct($id, $Fecha_Inicio, $Fecha_Terminacion)
    {
        $this->id = $id;
        $this->Fecha_Inicio = $Fecha_Inicio;
        $this->Fecha_Terminacion = $Fecha_Terminacion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->Fecha_Inicio;
    }

    /**
     * @param mixed $Fecha_Inicio
     */
    public function setFechaInicio($Fecha_Inicio): void
    {
        $this->Fecha_Inicio = $Fecha_Inicio;
    }

    /**
     * @return mixed
     */
    public function getFechaTerminacion()
    {
        return $this->Fecha_Terminacion;
    }

    /**
     * @param mixed $Fecha_Terminacion
     */
    public function setFechaTerminacion($Fecha_Terminacion): void
    {
        $this->Fecha_Terminacion = $Fecha_Terminacion;
    }

    public function MostarDatos()
    {
        echo "<H4>Los datos de la Cotizacion son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Id: </strong>".$this->getId()."</li>";
        echo   "<li><strong>Fecha_Inicio: </strong>".$this->getFechaInicio()."</li>";
        echo   "<li><strong>Fecha_Terminacion: </strong>".$this->getFechaTerminacion()."</li>";
        echo "</ul>";
    }

}