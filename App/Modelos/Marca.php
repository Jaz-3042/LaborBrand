<?php


namespace App\Modelos;

require('BasicModel.php');

class Marca extends BasicModel
{
    private$id;
    private$Nombre;

    /**
     * Marca constructor.
     * @param $id
     * @param $Nombre
     */
    public function __construct($Marca = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->Nombre = $Marca['Nombre'] ?? null;

    }
    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre($Nombre): void
    {
        $this->Nombre = $Nombre;
    }

    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.marca VALUES (NULL, ?)", array(
                $this->Nombre
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update() : bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.marca SET Nombre = ? WHERE id = ?", array(
                $this->Nombre,

            )
        );
        $this->Disconnect();
        return $result;
    }
    public function deleted($id) : void
    {
        // TODO: Implement deleted() method.
    }
    public static function search($query) : array
    {
        $arrMarca = array();
        $tmp = new Marca();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Marca = new Marca();
            $Marca->Id = $valor['Id'];
            $Marca->Nombre = $valor['Nombre'];
            $Marca->Disconnect();
            array_push($arrMarca, $Marca);
        }
        $tmp->Disconnect();
        return $arrMarca;
    }


    public static function searchForId($id) : marca
    {
        $Marca = new marca();
        if ($id > 0){
            $getrow = $Marca->getRow("SELECT * FROM bd_laborbrand.marca WHERE id =?", array($id));
            $Marca->Nombre = $getrow['Nombre'];

        }else{
            $Marca->Disconnect();
            unset($Marca);
            return NULL;
        }
    }
    public static function getAll() : array
    {
        return marca::search("SELECT * FROM bd_laborbrand.marca");
    }

    public static function MarcaRegistrado ($Nombre) : bool
    {
        $result = Marca::search("SELECT id FROM bd_laborbrand.marca where Nombre = '".$Nombre."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}

