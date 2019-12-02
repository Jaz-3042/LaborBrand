<?php


namespace App\Modelos;


class Compra
{
    private $Id;
    private $N_Factura;
    private $Fecha_Factura;
    private $Descripcion;
    private $Valor_Total;
    private $Proveedor;

    /**
     * Compra constructor.
     * @param $Id
     * @param $N_Factura
     * @param $Fecha_Factura
     * @param $Descripcion
     * @param $Valor_Total
     * @param $Proveedor
     */
    public function __construct($Id, $N_Factura, $Fecha_Factura, $Descripcion, $Valor_Total, $Proveedor)
    {
        $this->Id = $Id;
        $this->N_Factura = $N_Factura;
        $this->Fecha_Factura = $Fecha_Factura;
        $this->Descripcion = $Descripcion;
        $this->Valor_Total = $Valor_Total;
        $this->Proveedor = $Proveedor;
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
    public function getNFactura()
    {
        return $this->N_Factura;
    }

    /**
     * @param mixed $N_Factura
     */
    public function setNFactura($N_Factura)
    {
        $this->N_Factura = $N_Factura;
    }

    /**
     * @return mixed
     */
    public function getFechaFactura()
    {
        return $this->Fecha_Factura;
    }

    /**
     * @param mixed $Fecha_Factura
     */
    public function setFechaFactura($Fecha_Factura)
    {
        $this->Fecha_Factura = $Fecha_Factura;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->Valor_Total;
    }

    /**
     * @param mixed $Valor_Total
     */
    public function setValorTotal($Valor_Total)
    {
        $this->Valor_Total = $Valor_Total;
    }

    /**
     * @return mixed
     */
    public function getProveedor()
    {
        return $this->Proveedor;
    }

    /**
     * @param mixed $Proveedor
     */
    public function setProveedor($Proveedor)
    {
        $this->Proveedor = $Proveedor;
    }

    public function mostrardatos()
    {
        echo "<h4>los datos de los respuestos son:</h4>";
        echo "<li><strong>Id</strong>".$this->getId()."</li>";
        echo "<li><strong>N_Factura</strong>".$this->getNFactura()."</li>";
        echo "<li><strong>Fecha_Factura</strong>".$this->getFechaFactura()."</li>";
        echo "<li><strong>Descripcion</strong>".$this->getDescripcion()."<li/>";
        echo "<li><strong>Valor_Total</strong>".$this->getValorTotal()."<li/>";
        echo "<li><strong>Proveedor</strong>".$this->getProveedor()."<li/>";
    }
}