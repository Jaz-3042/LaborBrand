<?php


namespace App\Modelos;
use App\Modelos\BasicModel;

require('BasicModel.php');

class Municipio extends BasicModel
{
    private $Id;
    private $Nombre;
    private $Codigo;

    /**
     * Municipio constructor.
     * @param $Id
     * @param $Nombre
     * @param $Codigo
     */
    public function __construct($Municipio = array())
    {
        $this->Id = $Municipio['Id'] ?? null;
        $this->Nombre = $Municipio['Nombre'] ?? null;
        $this->Codigo = $Municipio['Codigo'] ?? null;
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
        $this->id = $Id;
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
        $result = $this->insertRow("INSERT INTO bd_laborbrand.municipio VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Codigo,
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update() : bool
    {
        $this->updateRow("UPDATE bd_laborbrand.municipio SET Nombre = ?, Codigo = ?  WHERE Id = ?", array(
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
        $arrMunicipio = array();
        $tmp = new Municipio();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Municipio = new Municipio();
            $Municipio->Id = $valor['Id'];
            $Municipio->Nombre = $valor['Nombre'];
            $Municipio->Codigo = $valor['Codigo'];
            $Municipio->Disconnect();
            array_push($arrMunicipio, $Municipio);
        }
        $tmp->Disconnect();
        return $arrMunicipio;
    }

    public static function searchForId($Id) : Municipio
    {
        $Municipio = null;
        if ($Id > 0){
            $Municipio = new Municipio();
            $getrow = $Municipio->getRow("SELECT * FROM bd_laborbrand.municipio WHERE Id =?", array($Id));
            $Municipio->Id = $getrow['Id'];
            $Municipio->Nombre = $getrow['Nombre'];
            $Municipio->Codigo= $getrow['Codigo'];

            $Municipio->Disconnect();
            return $Municipio;
        }else{
            $Municipio->Disconnect();
            unset($Municipio);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Municipio::search("SELECT * FROM bd_laborbrand.municipio");
    }
    public static function municipioRegistrado ($Nombre) : bool
    {
        $result = Municipio::search("SELECT id FROM bd_laborbrand.municipio where Nombre = ".$Nombre."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }
}