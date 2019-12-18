<?php


namespace App\Modelos;

require('BasicModel.php');

class Vehiculo extends BasicModel
{
    private$id;
    private$N_placa;
    private$Color;

    /**
     * vehiculo constructor.
     * @param $id
     * @param $N_placa
     * @param $Color
     * @param $Modelo
     */
    public function __construct($Vehiculo = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->id = $Vehiculo['id'] ?? null;
        $this->N_Placa = $Vehiculo['N_Placa'] ?? null;
        $this->Color = $Vehiculo['Color'] ?? null;

    }
    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();

    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id):int
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getN_Placa()
    {
        return $this->N_placa;
    }

    /**
     * @param string $N_placa
     */
    public function setN_Placa($N_placa) :string
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
     * @param string $Color
     */
    public function setColor($Color):string
    {
        $this->Color = $Color;
    }


    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.modelo VALUES (NULL, ?, ?)", array(
                $this->N_placa,
                $this->Color,


            )
        );
        $this->Disconnect();
        return $result;
    }
    protected function update()
    {
        $this->updateRow("UPDATE bd_laborbrand.vehiculo SET N_Placa = ?, Color= ?, WHERE id = ?", array(
                $this->N_placa,
                $this->Color,

            )
        );
        $this->Disconnect();
    }

    public function deleted($id) : void
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query) : array
    {
        $arrVehiculo= array();
        $tmp = new Vehiculo();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Vehiculo = new Vehiculo();
            $Vehiculo->id = $valor['id'];
            $Vehiculo->N_Placa_placa = $valor['N_Placa'];
            $Vehiculo->Color = $valor['Color'];
            $Vehiculo->Disconnect();
            array_push($arrVehiculo, $Vehiculo);
        }
        $tmp->Disconnect();
        return $arrVehiculo;
    }

    public static function searchForId($id) : Vehiculo
    {
        $Vehiculo = new Vehiculo();
        if ($id > 0){
            $getrow = $Vehiculo->getRow("SELECT * FROM bd_laborbrand.vehiculo WHERE id =?", array($id));
            $Vehiculo->id = $getrow['id'];
            $Vehiculo->N_Placa = $getrow['N_Placa'];
            $Vehiculo->Color = $getrow['Color'];
            $Vehiculo->Disconnect();
            return $Vehiculo;
        }else{
            $Vehiculo->Disconnect();
            unset($Vehiculo);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Vehiculo::search("SELECT * FROM bd_laborbrand.vehiculo");
    }

    public static function VehiculoRegistrado ($Vehiculo) : bool
    {
        $result = Vehiculo::search("SELECT id FROM bd_laborbrand.vehiculo where N_Placa = ".$Vehiculo);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}