<?php


namespace App\Modelos;


require('BasicModel.php');
class Compra extends BasicModel
{
    private $Id;
    private $N_Factura;
    private $Fecha_Factura;
    private $Descripcion;
    private $Valor_Total;
    private $Proveedor_Id;


    /**
     * Compra constructor.
     * @param $Id
     * @param $N_Factura
     * @param $Fecha_Factura
     * @param $Descripcion
     * @param $Valor_Total
     */
    public function __construct($Compra = array())

    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD

        $this->Id = $Id= $Compra ['Id'] ?? null;
        $this->N_Factura = $Compra ['N_Factura'] ?? null;
        $this->Fecha_Factura = $Compra['Fecha_Factura'] ?? null;
        $this->Descripcion =$Compra['Descripcion'] ?? null;
        $this->Valor_Total = $Compra['Valor_Total'] ?? null;
        $this->Proveedor_Id = $Compra['Proveedor_Id'] ?? null;
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }

    /**
     * @return mixed
     */
    public function getId() : int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id) : void
    {
        $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getN_Factura() : int
    {
        return $this->N_Factura;
    }

    /**
     * @param  $N_Factura
     */
    public function setN_Factura($N_Factura) : void

    {
        $this->N_Factura = $N_Factura;
    }

    /**
     * @return mixed
     */
    public function getFecha_Factura() : string
    {
        return $this->Fecha_Factura;
    }

    /**
     * @param  $Fecha_Factura
     */
    public function setFecha_Factura($Fecha_Factura) : void
    {
        $this->Fecha_Factura = $Fecha_Factura;
    }

    /**
     * @return mixed
     */
    public function getDescripcion() : string
    {
        return $this->Descripcion;
    }

    /**
     * @param string $Descripcion
     */
    public function setDescripcion($Descripcion) :void
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return int
     */
    public function getValor_Total() : int
    {
        return $this->Valor_Total;
    }

    /**
     * @param int $Valor_Total
     */
    public function setValor_Total($Valor_Total) : void
    {
        $this->Valor_Total = $Valor_Total;
    }

    /**
     * @return int
     */
    public function getProveedor_Id() : int
    {
        return $this->Proveedor_Id;
    }

    /**
     * @param int $Valor_Total
     */
    public function setProveedor_Id($Proveedor_Id) : void
    {
        $this->Proveedor_Id = $Proveedor_Id;
    }


    public function create() : bool
    {
        $this->insertRow("INSERT INTO bd_laborbrand.compra VALUES (NULL, ?, ?, ?, ?, ?)", array(
                $this->N_Factura,
                $this->Fecha_Factura,
                $this->Descripcion,
                $this->Valor_Total,
                999
            )
        );
        $this->Disconnect();
    }
    public function update() : bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.compra SET N_Factura = ?, Fecha_Factura = ?, Descripcion = ?, Valor_Total = ?, Proveedor_Id = ?, WHERE Id = ?", array(

                $this->N_Factura,
                $this->Fecha_Factura,
                $this->Descripcion,
                $this->Valor_Total,
                999
            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function deleted($Id) : void
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query) : array
    {
        $arrCompra = array();
        $tmp = new Compra();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Compra = new Compra();
            $Compra->Id = $valor['Id'];
            $Compra->N_Factura = $valor['N_Factura'];
            $Compra->Fecha_Factura = $valor['Fecha_Factura'];
            $Compra->Descripcion = $valor['Descripcion'];
            $Compra->Valor_Total = $valor['Valor_Total'];
            $Compra->Proveedor_Id = $valor['Proveedor_Id'];
            $Compra->Disconnect();
            array_push($arrCompra, $Compra);
        }
        $tmp->Disconnect();
        return $arrCompra;
    }
    protected static function searchForId($Id) :Compra
    {
        $Compra = new Compra();
        if ($Id > 0){
            $getrow = $Compra->getRow("SELECT * FROM bd_laborbrand.compra WHERE Id =?", array($Id));
            $Compra->Id = $getrow ['Id'];
            $Compra->N_Factura = $getrow ['N_Factura'];
            $Compra->Fecha_Factura= $getrow ['Fecha_Factura'];
            $Compra->Descripcion = $getrow ['Descripcion'];
            $Compra->Valor_Total = $getrow ['Valor_Total'];
            $Compra->Proveedor_Id = $getrow ['Proveedor_Id'];

            $Compra->Disconnect();
            return $Compra;
        }else{
            $Compra->Disconnect();
            unset($Compra);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Compra::search("SELECT * FROM bd_laborbrand.compra");
    }

    public static function CompraRegistrada ($N_Factura) : bool
    {
        $result = Compra::search("SELECT id FROM bd_laborbrand.compra where N_Factura = ".$N_Factura);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}
