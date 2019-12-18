<?php


namespace App\Modelos;

require('BasicModel.php');
class Repuesto_Orden_Servicio extends BasicModel
{
    private $Id;
    private $Justificacion;
    private $Costo_Venta;

    /**
     * Repuesto_Orden_Servicio constructor.
     * @param $Id
     * @param $Justificacion
     * @param $Costo_Venta
     */
    public function __construct($Repuesto = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD


        $this->Id = $Id = $Repuesto_Orden_Servicio ['id'] ?? null;
        $this->Justificacion = $Justificacion = $Repuesto_Orden_Servicio ["Justificacion"] ?? null;
        $this->Costo_Venta = $Costo_Venta = $Repuesto_Orden_Servicio ["Costo_Venta"] ?? null;
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }

    /**
     * @return int
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
     * @return string
     */
    public function getJustificacion() : string
    {
        return $this->Justificacion;
    }

    /**
     * @param string $Justificacion
     */
    public function setJustificacion($Justificacion) : void
    {
        $this->Justificacion = $Justificacion;
    }

    /**
     * @return int
     */
    public function getCostoVenta() : int
    {
        return $this->Costo_Venta;
    }

    /**
     * @param mixed $Costo_Venta
     */
    public function setCostoVenta($Costo_Venta) : int
    {
        $this->Costo_Venta = $Costo_Venta;
    }
    protected function create() : bool
    {
        $this->insertRow("INSERT INTO bd_laborbrand.repuesto_ordenservicio VALUES (NULL, ?, ?, ?)", array(
                $this->Id,
                $this->Justificacion,
                $this->Costo_Venta,


            )
        );
        $this->Disconnect();

    }
        public function update() : bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.repuesto_ordenservicio SET Justificacion = ?, Costo_Venta = ?, WHERE id = ?", array(
                $this->Justificacion,
                $this->Costo_Venta,
                $this->id ,

            )
        );
        $this->Disconnect();
        return $result;
    }
    protected function deleted($id) : void
    {
        // TODO: Implement deleted() method.
    }
    protected static function search($query) : array
    {
        $arrRepuesto_Orden_Servicio = array();
        $tmp = new Repuesto_Orden_Servicio();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Repuesto_Orden_Servicio = new Repuesto();
            $Repuesto_Orden_Servicio->id = $valor['id'];
            $Repuesto_Orden_Servicio->Justificacion = $valor['Nombre'];
            $Repuesto_Orden_Servicio->Costo_Venta = $valor['Tipo'];
            $Repuesto_Orden_Servicio->Disconnect();
            array_push( $arrRepuesto_Orden_Servicio, $Repuesto_Orden_Servicio);
        }
        $tmp->Disconnect();
        return  $arrRepuesto_Orden_Servicio;
    }
    protected static function searchForId($id) : Repuesto_Orden_Servicio
    {
        $Repuesto_Orden_Servicio = new Repuesto_Orden_Servicio();
        if ($id > 0){
            $getrow = $Repuesto_Orden_Servicio->getRow("SELECT * FROM bd_laborbrand.repuesto_ordenservicio WHERE id =?", array($id));
            $Repuesto_Orden_Servicio->id = $getrow['id'];
            $Repuesto_Orden_Servicio->Justificacion = $getrow['Justificacion'];
            $Repuesto_Orden_Servicio->Costo_Venta = $getrow['Costo_Venta'];
            $Repuesto_Orden_Servicio->Disconnect();
            return $Repuesto_Orden_Servicio;
        }else{
            $Repuesto_Orden_Servicio->Disconnect();
            unset($Repuesto_Orden_Servicio);
            return NULL;
        }

    }

    public static function getAll() : array
    {
        return Repuesto_Orden_Servicio::search("SELECT * FROM bd_laborbrand.repuesto_ordenservicio");
    }

    public static function Repuesto_Orden_Servicio ($Id) : bool
    {
        $result = Repuesto_Orden_Servicio::search("SELECT id FROM bd_laborbrand.Repuesto_Orden_Servicio where Id = ".$Id);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}