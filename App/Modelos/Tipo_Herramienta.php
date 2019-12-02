<?php


namespace App\Modelos;


class Tipo_Herramienta
{
    private $id
    private $Nombre
    private $Codigo
    private $Descripcion
    /**
 * Tipo_Herramienta constructor.
 * @param $id
 * @param $Nombre
 * @param $Codigo
 * @param $Descripcion
 */
    public function __construct($id, $Nombre, $Codigo, $Descripcion)
{
    $this->id = $id;
    $this->Nombre = $Nombre;
    $this->Codigo = $Codigo;
    $this->Descripcion = $Descripcion;
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
public function getCodigo()
{
    return $this->Codigo;
}/**
 * @param mixed $Codigo
 */
public function setCodigo($Codigo): void
{
    $this->Codigo = $Codigo;
}/**
 * @return mixed
 */
public function getDescripcion()
{
    return $this->Descripcion;
}/**
 * @param mixed $Descripcion
 */
public function setDescripcion($Descripcion): void
{
    $this->Descripcion = $Descripcion;
}

public function ()
{
    echo "<h4>Los datos de Tipo Herramienta son: </h4>";
    echo "<ul>";
    echo "<li><strong>Id:</strong>" . $this->getId() . "</li>";
    echo "<li><strong>Nombre:</strong>" . $this->getNombre() . "</li>";
    echo "<li><strong>Codigo:</strong>" . $this->getCodigo() . "</li>";
    echo "<li><strong>Descripcion:</strong>" . $this->getDescripcion() . "</li>";
    echo "</ul>";

}

}