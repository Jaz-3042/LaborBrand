<?php


namespace App\Modelos;


require('BasicModel.php');

class Repuesto extends BasicModel
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
    public function __construct($Repuesto = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD

        $this->Id = $Id = $Repuesto ['id'] ?? null;
        $this->Nombre = $Nombre = $Repuesto ['Nombre']?? null;
        $this->Tipo = $Tipo  = $Repuesto ['Tipo']?? null;
        $this->Descripcion = $Descripcion = $Repuesto ['Descripcion']?? null;
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
     * @param int $id
     */

    public  function setId($Id) : void
    {
        $this->Id = $Id;
    }

    /**
     * @return string
     */

    public function getNombre() : string
    {
    return $this->Nombre;
    }
        /**
         * @param string $nombres
         */
    public function setNombre($Nombre) : void
    {
    $this->Nombre = $Nombre;

    }

    /**
     * @return string
     */
    public function getTipo() : string
    {
    return $this->Tipo;

    }/**
    * @param string $Tipo
    */

    public function setTipo($Tipo) : void
    {
    $this->Tipo = $Tipo;
    }

    /**
     * @return string
     */
    public function getDescripcion() : string
    {
    return $this->Descripcion;

    }/**
    * @param string $Descripcion
    */
    public function setDescripcion($Descripcion) : void
    {
    $this->Descripcion = $Descripcion;

    }

    public function create() : bool
    {
        $this->insertRow("INSERT INTO bd_laborbrand.repuesto VALUES (NULL, ?, ?, ?, ?)", array(
                $this->Id,
                $this->Nombre,
                $this->Tipo,
                $this->Descripcion,

            )
        );
        $this->Disconnect();
    }

    public function update() : bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.repuesto SET Nombre = ?, Tipo = ?, Descripcion = ? WHERE id = ?", array(
                $this->Nombre,
                $this->Tipo,
                $this->Descripcion,
                $this->Id,
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
        $arrRepuesto = array();
        $tmp = new Repuesto();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Repuesto = new Repuesto();
            $Repuesto->id = $valor['id'];
            $Repuesto->Nombre = $valor['Nombre'];
            $Repuesto->Tipo = $valor['Tipo'];
            $Repuesto->Descripcion = $valor['Descripcion'];
            $Repuesto->Disconnect();
            array_push($arrRepuesto, $Repuesto);
        }
        $tmp->Disconnect();
        return $arrRepuesto;
    }

        protected static function searchForId($id) : Repuesto
    {
        $Repuesto = new Repuesto();
        if ($id > 0){
            $getrow = $Repuesto->getRow("SELECT * FROM bd_laborbrand.repuesto WHERE id =?", array($id));
            $Repuesto->id = $getrow ['id'];
            $Repuesto->Nombre = $getrow ['Nombre'];
            $Repuesto->Tipo = $getrow ['Tipo'];
            $Repuesto->Descripcion = $getrow ['Descripcion'];

            $Repuesto->Disconnect();
            return $Repuesto;
        }else{
            $Repuesto->Disconnect();
            unset($Repuesto);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Usuarios::search("SELECT * FROM bd_laborbrand.repuesto_ordenservicio");
    }

    public static function repuestoRegistrado ($Nombre) : bool
    {
        $result = Repuesto::search("SELECT id FROM bd_laborbrand.repuesto where Nombre = '".$Nombre."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}
