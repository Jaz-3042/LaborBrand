<?php


namespace App\Modelos;


class vehiculo
{
    private$id;
    private$N_placa;
    private$Color;
    private$Modelo;

    /**
     * vehiculo constructor.
     * @param $id
     * @param $N_placa
     * @param $Color
     * @param $Modelo
     */
    public function __construct($id, $N_placa, $Color, $Modelo)
    {
        $this->id = $id;
        $this->N_placa = $N_placa;
        $this->Color = $Color;
        $this->Modelo = $Modelo;
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
    public function getNPlaca()
    {
        return $this->N_placa;
    }

    /**
     * @param mixed $N_placa
     */
    public function setNPlaca($N_placa)
    {
        $this->N_placa = $N_placa;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color)
    {
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @param mixed $Modelo
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
    }

public function mostarDatos()
{
    echo"<h4> Los Datos del vehiculo son:</h4>";
    echo"<ul>";
    echo"<li><strong>Nombres: </strong>".$this->getId()."<li>";
    echo"<li><strong>Apellidos: </strong>".$this->getNPlaca()."<li>";
    echo"<li><strong>Telefono: </strong>".$this->getColor()."<li>";
    echo"<li><strong>Tipo_Documento: </strong>".$this->getColor()."<li>";
    echo"<li><strong>Documento: </strong>".$this->getModelo()."<li>";
    echo"</ul>";
}
}
