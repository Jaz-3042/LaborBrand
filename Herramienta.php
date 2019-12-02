<?php

namespace App\Modelos

class Herramienta
{
    private $id
    private $Nombre
    private $Tamano
    private $Unidad_Medida
    private $Garantia
    private $Estado

    /**
 * Herramienta constructor.
 * @param $id
 * @param $Nombre
 * @param $Tamano
 * @param $Unidad_Medida
 * @param $Garantia
 * @param $Estado
 */public function __construct($id, $Nombre, $Tamano, $Unidad_Medida, $Garantia, $Estado)
{
    $this->id = $id;
    $this->Nombre = $Nombre;
    $this->Tamano = $Tamano;
    $this->Unidad_Medida = $Unidad_Medida;
    $this->Garantia = $Garantia;
    $this->Estado = $Estado;
}/**
 * @return mixed
 */
public function getId()
{
    return $this->id;
}/**
 * @param mixed $id
 */
public function setId($id): void
{
    $this->id = $id;
}/**
 * @return mixed
 */
public function getNombre()
{
    return $this->Nombre;
}/**
 * @param mixed $Nombre
 */
public function setNombre($Nombre): void
{
    $this->Nombre = $Nombre;
}/**
 * @return mixed
 */
public function getTamano()
{
    return $this->Tamano;
}/**
 * @param mixed $Tamano
 */
public function setTamano($Tamano): void
{
    $this->Tamano = $Tamano;
}/**
 * @return mixed
 */
public function getUnidadMedida()
{
    return $this->Unidad_Medida;
}/**
 * @param mixed $Unidad_Medida
 */
public function setUnidadMedida($Unidad_Medida): void
{
    $this->Unidad_Medida = $Unidad_Medida;
}/**
 * @return mixed
 */
public function getGarantia()
{
    return $this->Garantia;
}/**
 * @param mixed $Garantia
 */
public function setGarantia($Garantia): void
{
    $this->Garantia = $Garantia;
}/**
 * @return mixed
 */
public function getEstado()
{
    return $this->Estado;
}/**
 * @param mixed $Estado
 */
public function setEstado($Estado): void
{
    $this->Estado = $Estado;
}
private function mostrarDatos()
{
    echo "<h4>Los datos de la herramienta son: </h4>";
    echo "<ul>";
    echo "<li><strong>Id:</strong>" . $this->getId() . "</li>";
    echo "<li><strong>Nombre:</strong>" . $this->getNombre() . "</li>";
    echo "<li><strong>Tamano:</strong>" . $this->getTamano() . "</li>";
    echo "<li><strong>Unidad_Medida:</strong>" . $this->getUnidadMedida() . "</li>";
    echo "<li><strong>Garantia:</strong>" . $this->getGarantia() . "</li>";
    echo "<li><strong>Estado:</strong>" . $this->getEstado() . "</li>";
    echo "</ul>";
}


}