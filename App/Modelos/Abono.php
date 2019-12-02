<?php


namespace App\Modelos;


class Abono
{
    private $Id
    private $Valor
    private $Fecha

    /**
     * Abono constructor.
     * @param $Id
     * @param $Valor
     * @param $Fecha
     */public function __construct($Id, $Valor, $Fecha)
{
    $this->Id = $Id;
    $this->Valor = $Valor;
    $this->Fecha = $Fecha;
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
public function getValor()
{
    return $this->Valor;
}/**
 * @param mixed $Valor
 */
public function setValor($Valor): void
{
    $this->Valor = $Valor;
}/**
 * @return mixed
 */
public function getFecha()
{
    return $this->Fecha;
}/**
 * @param mixed $Fecha
 */
public function setFecha($Fecha): void
{
    $this->Fecha = $Fecha;
}

private function mostrarDatos()
{
    echo "<h4>Los datos del Abono son: </h4>";
    echo "<ul>";
    echo "<li><strong>Id:</strong>" . $this->getId() . "</li>";
    echo "<li><strong>Valor:</strong>" . $this->getValor() . "</li>";
    echo "<li><strong>Fecha:</strong>" . $this->getFecha() . "</li>";
    echo "</ul>";

}
}