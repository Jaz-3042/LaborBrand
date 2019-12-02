<?php


namespace App\Modelos;


class Modelo
{
    private$id;
    private$Nombre;
    private$Marca;

    /**
     * Modelo constructor.
     * @param $id
     * @param $Nombre
     * @param $Marca
     */
    public function __construct($id, $Nombre, $Marca)
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->Marca = $Marca;
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

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @param mixed $Marca
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
    }

public function mostarDatos()
{
    echo"<h4> Los Datos de las Marcas son:</h4>";
    echo"<ul>";
    echo"<li><strong>Nombres: </strong>".$this->getId()."<li>";
    echo"<li><strong>Apellidos: </strong>".$this->getNombre()."<li>";
    echo"<li><strong>Telefono: </strong>".$this->getMarca()."<li>";
    echo"</ul>";
}
}