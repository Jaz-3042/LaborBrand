<?php


namespace App\Modelos;


class Compra_Herramienta
{
    private $Id;
    private $Cantidad;
    private $Valor_Costo;


    /**
     * Compra_Herramienta constructor.
     * @param $Id
     * @param $Cantidad
     * @param $Valor_Costo
     */public function __construct($Id, $Cantidad, $Valor_Costo)
{
    $this->Id = $Id;
    $this->Cantidad = $Cantidad;
    $this->Valor_Costo = $Valor_Costo;
}/**
 * @return mixed
 */
public function getId()
{
    return $this->Id;
}/**
 * @param mixed $Id
 */
public function setId($Id): void
{
    $this->Id = $Id;
}/**
 * @return mixed
 */
public function getCantidad()
{
    return $this->Cantidad;
}/**
 * @param mixed $Cantidad
 */
public function setCantidad($Cantidad): void
{
    $this->Cantidad = $Cantidad;
}/**
 * @return mixed
 */
public function getValorCosto()
{
    return $this->Valor_Costo;
}/**
 * @param mixed $Valor_Costo
 */
public function setValorCosto($Valor_Costo): void
{
    $this->Valor_Costo = $Valor_Costo;
}

public function mostrarDatos()
{
    echo "<h4>Los datos de la compra de herramientas son: </h4>";
    echo "<ul>";
    echo "<li><strong>Id:</strong>" . $this->getId() . "</li>";
    echo "<li><strong>Cantidad:</strong>" . $this->getCantidad() . "</li>";
    echo "<li><strong>Valor_Costo:</strong>" . $this->getValorCosto() . "</li>";
    echo "</ul>";

}

}