<?php


namespace App\Modelos;


class Servicio
{
    private $id;
    private $Nombre;
    private $Descripcion;

    /**
     * Servicio constructor.
     * @param $id
     * @param $Nombre
     * @param $Descripcion
     */
    public function __construct($id, $Nombre, $Descripcion)
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
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
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre): void
    {
        $this->Nombre = $Nombre;
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
    public function setDescripcion($Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    public function MostrarDatos()
    {
        echo "<H4>Los datos de la persona son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Id: </strong>".$this->getId()."</li>";
        echo   "<li><strong>Nombre: </strong>".$this->getNombre()."</li>";
        echo   "<li><strong>Descripcion: </strong>".$this->getDescripcion()."</li>";
        echo "</ul>";
    }


}