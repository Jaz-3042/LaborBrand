<?php


namespace App\Modelos;

require('BasicModel.php');
class Compra_Repuesto extends BasicModel
{
    private $Id;
    private $Valor_Costo;
    private $Compra_Id;
    private $Repuesto_Id;

    /**
     * Compra_Repuesto constructor.
     * @param $Id
     * @param $Valor_Costo
     * @param $Compra_Id
     * @param $Repuesto_Id
     */

    public function __construct($Compra_Repuesto = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->Id = $Id = $Compra_Repuesto ['Id'] ?? null;
        $this->Valor_Costo = $Compra_Repuesto['Valor_Costo'] ?? null;
        $this->Compra_Id = $Compra_Repuesto['Compra_Id'] ?? null;
        $this->Repuesto_Id = $Compra_Repuesto['Repuesto_Id'] ?? null;
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct()
    {
        $this->Disconnect();
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id): void
    {
        $this->Id = $Id;
    }

    /**
     * @return int $Valor_Costo
     */
    public function getValor_Costo(): int
    {
        return $this->Valor_Costo;
    }

    /**
     * @param int $Valor_Costo
     */
    public function setValor_Costo($Valor_Costo): void
    {
        $this->Valor_Costo = $Valor_Costo;
    }

    /**
     * @return int $Compra_Id
     */
    public function getCompra_Id($Compra_Id): int
    {
        $this->Compra_Id = $Compra_Id;
    }

    /**
     * @param int $Compra_Id
     */
    public function setCompra_Id($Compra_Id): void
    {
        $this->Compra_Id = $Compra_Id;
    }

    /**
     * @return int $Repuesto_Id
     */
    public function getRepuesto_Id($Repuesto_Id): int
    {
        $this->Repuesto_Id = $Repuesto_Id;
    }

    /**
     * @param int $Repuesto_Id
     */
    public function setRepuesto_Id($Repuesto_Id): void
    {
        $this->Repuesto_Id = $Repuesto_Id;
    }

    /**
     * @return mixed
     */

    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.compra_repuesto VALUES (NULL, ?, ?,?)", array(
                $this->Valor_Costo,
                1,
                20,

            )
        );
        $this->Disconnect();
        return $result;
    }

    public function update(): bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.compra_repuesto SET Valor_Costo = ?, Compra_Id = ?, Repuesto_Id = ?  WHERE Id = ?", array(
                $this->Valor_Costo,
                1,
                20,
                $this->Id,

            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function deleted($Id): void
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query): array
    {
        $arrCompra_Repuesto = array();
        $tmp = new Compra_Repuesto();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Compra_Repuesto = new Compra_Repuesto();
            $Compra_Repuesto->Id = $valor['Id'];
            $Compra_Repuesto->Valor_Costo = $valor['Valor_Costo'];
            $Compra_Repuesto->Compra_Id = $valor['Compra_Id'];
            $Compra_Repuesto->Repuesto_Id = $valor['Repuesto_Id'];
            $Compra_Repuesto->Disconnect();
            array_push($arrCompra_Repuesto, $Compra_Repuesto);
        }
        $tmp->Disconnect();
        return $arrCompra_Repuesto;
    }

    protected static function searchForId($Id): Compra_Repuesto
    {
        $Compra_Repuesto = null;
        if ($Id > 0) {
            $Compra_Repuesto = new Compra_Repuesto();
            $getrow = $Compra_Repuesto->getRow("SELECT * FROM bd_laborbrand.compra_repuesto WHERE Id =?", array($Id));
            $Compra_Repuesto->Id = $getrow['Id'];
            $Compra_Repuesto->Valor_Costo = $getrow['Valor_Costo'];
            $Compra_Repuesto->Compra_Id = $getrow['Compra_Id'];
            $Compra_Repuesto->Repuesto_Id = $getrow['Repuesto_Id'];
        }
        $Compra_Repuesto->Disconnect();
        return $Compra_Repuesto;
    }

    public static function getAll(): array
    {
        return Compra_Repuesto::search("SELECT * FROM bd_laborbrand.compra_repuesto");
    }

    public static function Compra_RepuestoRegistrado($Compra_Id): bool
    {
        $result = Compra_Repuesto::search("SELECT Id FROM bd_laborbrand.compra_repuesto where Compra_Id =" . $Compra_Id);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
}





