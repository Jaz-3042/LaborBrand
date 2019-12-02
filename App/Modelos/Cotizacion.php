<?php


namespace App\Modelos;


class Cotizacion
{
    private $id;
    private $N_Serial;
    private $Fecha;
    private $Estado;

    /**
     * Cotizacion constructor.
     * @param $id
     * @param $N_Serial
     * @param $Fecha
     * @param $Estado
     */
    public function __construct($id, $N_Serial, $Fecha, $Estado)
    {
        $this->id = $id;
        $this->N_Serial = $N_Serial;
        $this->Fecha = $Fecha;
        $this->Estado = $Estado;
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
    public function getNSerial()
    {
        return $this->N_Serial;
    }

    /**
     * @param mixed $N_Serial
     */
    public function setNSerial($N_Serial): void
    {
        $this->N_Serial = $N_Serial;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha): void
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado): void
    {
        $this->Estado = $Estado;
    }


    public function MostrarDatos()
    {
        echo "<H4>Los datos de la Cotizacion son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Id: </strong>".$this->getId()."</li>";
        echo   "<li><strong>N_Serial: </strong>".$this->getNSerial()."</li>";
        echo   "<li><strong>Fecha: </strong>".$this->getFecha()."</li>";
        echo   "<li><strong>Estados: </strong>".$this->getEstado()."</li>";
        echo "</ul>";
    }

}