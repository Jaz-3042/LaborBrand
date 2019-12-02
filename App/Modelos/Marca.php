<?php


namespace App\Modelos;


class Marca
{
    private$id;
    private$Nombre;

    /**
     * Marca constructor.
     * @param $id
     * @param $Nombre
     */
    public function __construct($id, $Nombre)
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
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
    public function setId($id)
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
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

public function mostarDatos()
{
    echo"<h4> Los Datos de las Marcas son:</h4>";
    echo"<ul>";
    echo"<li><strong>Nombres: </strong>".$this->getId()."<li>";
    echo"<li><strong>Apellidos: </strong>".$this->getNombre()."<li>";

    echo"</ul>";
}
}
