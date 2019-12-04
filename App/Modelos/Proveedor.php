<?php


namespace App\Modelos;


class Proveedor
{
    private $id;
    private $Razon_Social;
    private $Nit;
    private $Representante_Legal;

    /**
     * Proveedor constructor.
     * @param $id
     * @param $Razon_Social
     * @param $Nit
     * @param $Representante_Legal
     */
    public function __construct($id, $Razon_Social, $Nit, $Representante_Legal)
    {
        $this->id = $id;
        $this->Razon_Social = $Razon_Social;
        $this->Nit = $Nit;
        $this->Representante_Legal = $Representante_Legal;
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
    public function getRazonSocial()
    {
        return $this->Razon_Social;
    }

    /**
     * @param mixed $Razon_Social
     */
    public function setRazonSocial($Razon_Social)
    {
        $this->Razon_Social = $Razon_Social;
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
    public function setNit($Nit)
    {
        $this->Nit = $Nit;
    }

    /**
     * @return mixed
     */
    public function getRepresentanteLegal()
    {
        return $this->Representante_Legal;
    }

    /**
     * @param mixed $Representante_Legal
     */
    public function setRepresentanteLegal($Representante_Legal)
    {
        $this->Representante_Legal = $Representante_Legal;
    }


    public function MostarDatos()
    {
        echo "<H4>Los datos de la persona son: </H4>";
        echo "<ul>";
        echo   "<li><strong>id: </strong>".$this->getId()."</li>";
        echo   "<li><strong>Razon_Social </strong>".$this->getRazonSocial()."</li>";
        echo   "<li><strong>Nit: </strong>".$this->getNit()."</li>";
        echo   "<li><strong>Representante_Legal: </strong>".$this->getRepresentanteLegal()."</li>";
        echo "</ul>";
    }
}