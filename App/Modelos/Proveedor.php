<?php


namespace App\Modelos;
use  App\Modelos\BasicModel;

require('BasicModel.php');

class Proveedor extends BasicModel
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
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) : void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRazonSocial(): string
    {
        return $this->Razon_Social;
    }

    /**
     * @param mixed $Razon_Social
     */
    public function setRazonSocial($Razon_Social) : void
    {
        $this->Razon_Social = $Razon_Social;
    }

    /**
     * @return mixed
     */
    public function getNit() : string
    {
        return $this->Nit;
    }

    /**
     * @param mixed $Nit
     */
    public function setNit($Nit) :void
    {
        $this->Nit = $Nit;
    }

    /**
     * @return mixed
     */
    public function getRepresentanteLegal() : string
    {
        return $this->Representante_Legal;
    }

    /**
     * @param mixed $Representante_Legal
     */
    public function setRepresentanteLegal($Representante_Legal) : void
    {
        $this->Representante_Legal = $Representante_Legal;
    }
    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.proveedor VALUES (NULL, ?, ?, ?)", array(
                $this->Razon_Social,
                $this->Nit,
                $this->Representante_Legal,
            )
        );
        $this->Disconnect();
        return $result;
    }
    protected function update() : bool
    {
        $this->updateRow("UPDATE bd_laborbrand.proveedor SET Razon_Social = ?, Nit = ? , Representante_Legal = ?  WHERE id = ?", array(
                $this->Razon_Social,
                $this->Nit,
                $this->Representante_Legal,
                $this->id
            )
        );
        $this->Disconnect();
    }

    protected function deleted($id) : void
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query) : array
    {
        $arrayProveedor = array();
        $tmp = new Proveedor();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Proveedor = new Proveedor;
            $Proveedor->id = $valor['id'];
            $Proveedor->Razon_Social = $valor['Razon_Social'];
            $Proveedor->Nit = $valor['Nit'];
             $Proveedor->Representante_Legal = $valor['Representante_Legal'];
            $Proveedor->Disconnect();
            array_push($arrayProveedor, $Proveedor);
        }
        $tmp->Disconnect();
        return $arrayProveedor;
    }

    public static function searchForId($id) : Proveedor
    {
        $Proveedor = new Proveedor();
        if ($id > 0){
            $getrow = $Proveedor->getRow("SELECT * FROM bd_laborbrand.proveedor WHERE id =?", array($id));
            $Proveedor->id = $getrow['id'];
            $Proveedor->Razon_Social = $getrow['Razon Social'];
            $Proveedor->Nit = $getrow['Nit'];
            $Proveedor->Representante_Legal = $getrow['Representante Legal'];
            $Proveedor->Disconnect();
            return $Proveedor;
        }else{
            $Proveedor->Disconnect();
            unset($Proveedor);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Proveedor::search("SELECT * FROM bd_laborbrand.proveedor");
    }
    public static function proveedorRegistrado ($Razon_Social) : bool
    {
        $result = Proveedor::search("SELECT id FROM bd_laborbrand.proveedor where Razon_Social = '".$Razon_Social."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}