<?php


namespace App\Modelos;
use  App\Modelos\BasicModel;

require('BasicModel.php');

class Departamento extends BasicModel
{
    private $Id;
    private $Nombre;
    private $Codigo;

    /**
     * Departamento constructor.
     * @param $Id
     * @param $Nombre
     * @param $Codigo
     */
    public function __construct($Departamento = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->Id = $Departamento['Id'] ?? null;
        $this->Nombre = $Departamento['Nombre'] ?? null;
        $this->Codigo = $Departamento['Codigo'] ?? null;
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
     * @param mixed $Id
     */
    public function setId($Id) : void
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getNombre() : string
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre) : void
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getCodigo() : int
    {
        return $this->Codigo;
    }

    /**
     * @param mixed $Codigo
     */
    public function setCodigo($Codigo) : void
    {
        $this->Codigo = $Codigo;
    }

    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.departamento VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Codigo,
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update() : bool
    {
        $this->updateRow("UPDATE bd_laborbrand.departamento SET Nombre = ?, Codigo = ?  WHERE Id = ?", array(
                $this->Nombre,
                $this->Codigo,
                $this->Id
            )
        );
        $this->Disconnect();
    }

    protected function deleted($Id) : void
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query) : array
    {
        $arrDepartamento = array();
        $tmp = new Departamento();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Departamento = new Departamento();
            $Departamento->Id = $valor['Id'];
            $Departamento->Nombre = $valor['Nombre'];
            $Departamento->Codigo = $valor['Codigo'];
            $Departamento->Disconnect();
            array_push($arrDepartamento, $Departamento);
        }
        $tmp->Disconnect();
        return $arrDepartamento;
    }

    public static function searchForId($Id) : Departamento
    {
        $Departamento = null;
        if ($Id > 0){
            $Departamento = new Departamento();
            $getrow = $Departamento->getRow("SELECT * FROM bd_laborbrand.departamento WHERE Id =?", array($Id));
            $Departamento->Id = $getrow['Id'];
            $Departamento->Nombre = $getrow['Nombre'];
            $Departamento->Codigo = $getrow['Codigo'];
        }
            $Departamento->Disconnect();
            return $Departamento;
    }

    public static function getAll() : array
    {
        return Departamento::search("SELECT * FROM bd_laborbrand.departamento");
    }
    public static function departamentoRegistrado ($Nombre) : bool
    {
        $result = Departamento::search("SELECT id FROM bd_laborbrand.departamento where Nombre = ".$Nombre);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }
}
