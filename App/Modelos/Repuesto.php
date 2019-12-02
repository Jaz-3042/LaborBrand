<?php


namespace App\Modelos;


class Repuesto
{
    private $Id;
    private $Nombre;
    private $Tipo;
    private $Descripcion;

    /**
     * Repuesto constructor.
     * @param $Id
     * @param $Nombre
     * @param $Tipo
     * @param $Descripcion
     */
    public function __construct($Id, $Nombre, $Tipo, $Descripcion)
    {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Tipo = $Tipo;
        $this->Descripcion = $Descripcion;
    }

/**
 * @return mixed
 */

    /**
     * @param mixed $Id
     */
    public  function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    public function getNombre()
    {
    return $this->Nombre;
    }/**
    * @param mixed $Nombre
    */
    public function setNombre($Nombre)
    {
    $this->Nombre = $Nombre;
    }/**
    * @return mixed
    */
    public function getTipo()
    {
    return $this->Tipo;
    }/**
    * @param mixed $Tipo
    */
    public function setTipo($Tipo)
    {
    $this->Tipo = $Tipo;
    }/**
    * @return mixed
    */
    public function getDescripcion()
    {
    return $this->Descripcion;
    }/**
    * @param mixed $Descripcion
    */
    public function setDescripcion($Descripcion)
    {
    $this->Descripcion = $Descripcion;

    }

    public function mostrardatos()
    {
        echo "<h4>los datos de los respuestos son:</h4>";
        echo "<li><strong>Id</strong>".$this->getId()."</li>";
        echo "<li><strong>Nombre</strong>".$this->getNombre()."</li>";
        echo "<li><strong>Tipo</strong>".$this->getTipo()."</li>";
        echo "<li><strong>Descripcion</strong>".$this->getDescripcion()."<li/>";
    }
}
