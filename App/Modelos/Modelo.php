<?php


namespace App\Modelos;


require('BasicModel.php');


class Modelo extends BasicModel
{
    private $id;
    private $Nombre;
    private $Marca;

    /**
     * Modelo constructor.
     * @param $id
     * @param $Nombre
     * @param $Marca
     */
    public function __construct($Modelo = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->id = $Modelo['id'] ?? null;
        $this->Nombre = $Modelo['Nombre'] ?? null;
        $this->Marca_id = $Modelo['Marca_id'] ?? null;
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct()
    {
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
     * @return mixed
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

    /**
     * @return mixed
     */
    public function getMarca_Id(): int
    {
        return $this->Marca_Id;
    }

    /**
     * @param string $Marca
     */
    public function setMarca_Id($Marca_Id): void
    {
        $this->Marca_Id = $Marca_Id;
    }

    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.modelo VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Marca_Id,
            )
        );
        $this->Disconnect();
        return $result;
    }

    public function update(): bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.modelo SET Nombre = ?, Marca_Id= ? WHERE Id = ?", array(
                $this->Nombre,
                $this->Marca_Id,
                $this->Id
            )
        );
        $this->Disconnect();
        return $result;
    }

    public function deleted($Id): void
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query): array
    {
        $arrModelo = array();
        $tmp = new Modelo();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Modelo = new Modelo();
            $Modelo->Id = $valor['Id'];
            $Modelo->Nombre = $valor['Nombre'];
            $Modelo->Marca_Id = $valor['Marca_Id'];
            $Modelo->Disconnect();
            array_push($arrModelo, $Modelo);
        }
        $tmp->Disconnect();
        return $arrModelo;
    }

    public static function searchForId($Id): Modelo
    {
        $Modelo = new Modelo();
        if ($Id > 0) {
            $getrow = $Modelo->getRow("SELECT * FROM bd_laborbrand.modelo WHERE id =?", array($Id));
            $Modelo->Id = $getrow['Id'];
            $Modelo->Nombre = $getrow['Nombre'];
            $Modelo->Marca_Id = $getrow['Marca_Id'];
            $Modelo->Disconnect();
            return $Modelo;
        } else {
            $Modelo->Disconnect();
            unset($Modelo);
            return NULL;
        }
    }

    public static function getAll(): array
    {
        return Modelo::search("SELECT * FROM bd_laborbrand.modelo");
    }

    public static function ModeloRegistrado($Nombre): bool
    {
        $result = Modelo::search("SELECT id FROM bd_laborbrand.modelo where Nombre= " . $Nombre);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
