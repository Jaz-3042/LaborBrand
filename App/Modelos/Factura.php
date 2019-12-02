<?php


namespace App\Modelos;


class Factura
{
    private $id;
    private $Numero;
    private $Fecha;
    private $Nit;
    private $Valor_Unitario;
    private $Forma_Pago;

    /**
     * Factura constructor.
     * @param $id
     * @param $Numero
     * @param $Fecha
     * @param $Nit
     * @param $Valor_Unitario
     * @param $Forma_Pago
     */
    public function __construct($id, $Numero, $Fecha, $Nit, $Valor_Unitario, $Forma_Pago)
    {
        $this->id = $id;
        $this->Numero = $Numero;
        $this->Fecha = $Fecha;
        $this->Nit = $Nit;
        $this->Valor_Unitario = $Valor_Unitario;
        $this->Forma_Pago = $Forma_Pago;
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
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param mixed $Numero
     */
    public function setNumero($Numero): void
    {
        $this->Numero = $Numero;
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
    public function getNit()
    {
        return $this->Nit;
    }

    /**
     * @param mixed $Nit
     */
    public function setNit($Nit): void
    {
        $this->Nit = $Nit;
    }

    /**
     * @return mixed
     */
    public function getValorUnitario()
    {
        return $this->Valor_Unitario;
    }

    /**
     * @param mixed $Valor_Unitario
     */
    public function setValorUnitario($Valor_Unitario): void
    {
        $this->Valor_Unitario = $Valor_Unitario;
    }

    /**
     * @return mixed
     */
    public function getFormaPago()
    {
        return $this->Forma_Pago;
    }

    /**
     * @param mixed $Forma_Pago
     */
    public function setFormaPago($Forma_Pago): void
    {
        $this->Forma_Pago = $Forma_Pago;
    }


    public function MostrarDatos()
    {
        echo "<H4>Los datos de la Cotizacion son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Id: </strong>".$this->getId()."</li>";
        echo   "<li><strong>Numero: </strong>".$this->getNumero()."</li>";
        echo   "<li><strong>Fecha: </strong>".$this->getFecha()."</li>";
        echo   "<li><strong>Nit: </strong>".$this->getNit()."</li>";
        echo   "<li><strong>Valor_Unitario: </strong>".$this->getValorUnitario()."</li>";
        echo   "<li><strong>Forma_Pago: </strong>".$this->getFormaPago()."</li>";
        echo "</ul>";
    }

}