<?php


namespace App\Modelos;


class Compra_Repuesto
{
    private $Id;
    private $Justificacion;
    private $Costo_Venta;
    private $Repuesto;
    private $Orden_Servicio;

    /**
     * Compra_Repuesto constructor.
     * @param $Id
     * @param $Justificacion
     * @param $Costo_Venta
     * @param $Repuesto
     * @param $Orden_Servicio
     */
    public function __construct($Id, $Justificacion, $Costo_Venta, $Repuesto, $Orden_Servicio)
    {
        $this->Id = $Id;
        $this->Justificacion = $Justificacion;
        $this->Costo_Venta = $Costo_Venta;
        $this->Repuesto = $Repuesto;
        $this->Orden_Servicio = $Orden_Servicio;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getJustificacion()
    {
        return $this->Justificacion;
    }

    /**
     * @param mixed $Justificacion
     */
    public function setJustificacion($Justificacion)
    {
        $this->Justificacion = $Justificacion;
    }

    /**
     * @return mixed
     */
    public function getCostoVenta()
    {
        return $this->Costo_Venta;
    }

    /**
     * @param mixed $Costo_Venta
     */
    public function setCostoVenta($Costo_Venta)
    {
        $this->Costo_Venta = $Costo_Venta;
    }

    /**
     * @return mixed
     */
    public function getRepuesto()
    {
        return $this->Repuesto;
    }

    /**
     * @param mixed $Repuesto
     */
    public function setRepuesto($Repuesto)
    {
        $this->Repuesto = $Repuesto;
    }

    /**
     * @return mixed
     */
    public function getOrdenServicio()
    {
        return $this->Orden_Servicio;
    }

    /**
     * @param mixed $Orden_Servicio
     */
    public function setOrdenServicio($Orden_Servicio)
    {
        $this->Orden_Servicio = $Orden_Servicio;
    }

    public function mostrardatos()
    {
        echo "<h4>los datos de Compra_Repuesto son:</h4>";
        echo "<li><strong>Id</strong>".$this->getId()."</li>";
        echo "<li><strong>Justificacion</strong>".$this->getJustificacion()."</li>";
        echo "<li><strong>Costo_Venta</strong>".$this->getCostoVenta()."</li>";
        echo "<li><strong>Repuesto</strong>".$this->getRepuesto()."<li/>";
    }
}