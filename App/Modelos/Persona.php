<?php

namespace App\Modelos;

include('BasicModel.php');

class Persona extends BasicModel
{
    private $Id;
    private $Nombres;
    private $Apellidos;
    private $Tipo_Documento;
    private $N_Documento;
    private $Telefono_Fijo;
    private $N_Celular;
    private $Direccion;
    private $Email;
    private $Rol;
    private $Contrasena;
    private $Estado;

    /**
     * Persona constructor.
     * @param $Id
     * @param $Nombres
     * @param $Apellidos
     * @param $Tipo_Documento
     * @param $N_Documento
     * @param $Telefono_Fijo
     * @param $N_Celular
     * @param $Direccion
     * @param $Email
     * @param $Rol
     * @param $Contrasena
     * @param $Estado
     */
    public function __construct($Persona = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->id = $Persona['id'] ?? null;
        $this->Nombres = $Persona = ['Nombres'] ?? null;
        $this->Apellidos = $Persona = ['Apellidos'] ?? null;;
        $this->Tipo_Documento = $Persona = ['Tipo_Documento'] ?? null;
        $this->N_Documento = $Persona = ['N_Documento'] ?? null;;
        $this->Telefono_Fijo = $Persona = ['Telefono_Fijo'] ?? null;;
        $this->N_Celular = $Persona = ['N_Celular'] ?? null;;
        $this->Direccion = $Persona = ['Direccion'] ?? null;;
        $this->Email = $Persona = ['Email'] ?? null;;
        $this->Rol = $Persona = ['Rol'] ?? null;;
        $this->Contrasena = $Persona = ['Contrasena'] ?? null;;
        $this->Estado = $Persona = ['Estado'] ?? null;;
    }
    /* Metodo destructor cierra la conexion. */
    function __destruct()
    {
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
    public function setId($Id): void
    {
        $this->id = $Id;
    }

    /**
     * @return mixed
     */
    public function getNombres() : string
    {
        return $this->Nombres;
    }

    /**
     * @param mixed $Nombres
     */
    public function setNombres($Nombres): void
    {
        $this->Nombres = $Nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos() : String
    {
        return $this->Apellidos;
    }

    /**
     * @param mixed $Apellidos
     */
    public function setApellidos($Apellidos): void
    {
        $this->Apellidos = $Apellidos;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento() : string
    {
        return $this->Tipo_Documento;
    }

    /**
     * @param mixed $Tipo_Documento
     */
    public function setTipoDocumento($Tipo_Documento): void
    {
        $this->Tipo_Documento = $Tipo_Documento;
    }

    /**
     * @return mixed
     */
    public function getNDocumento() : int
    {
        return $this->N_Documento;
    }

    /**
     * @param mixed $N_Documento
     */
    public function setNDocumento($N_Documento): void
    {
        $this->N_Documento = $N_Documento;
    }

    /**
     * @return mixed
     */
    public function getTelefonoFijo() : int
    {
        return $this->Telefono_Fijo;
    }

    /**
     * @param mixed $Telefono_Fijo
     */
    public function setTelefonoFijo($Telefono_Fijo): void
    {
        $this->Telefono_Fijo = $Telefono_Fijo;
    }

    /**
     * @return mixed
     */
    public function getNCelular() : int
    {
        return $this->N_Celular;
    }

    /**
     * @param mixed $N_Celular
     */
    public function setNCelular($N_Celular): void
    {
        $this->N_Celular = $N_Celular;
    }

    /**
     * @return mixed
     */
    public function getDireccion() : string
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion): void
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getEmail() : string
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getRol() : string
    {
        return $this->Rol;
    }

    /**
     * @param mixed $Rol
     */
    public function setRol($Rol): void
    {
        $this->Rol = $Rol;
    }

    /**
     * @return mixed
     */
    public function getContrasena() : string
    {
        return $this->Contrasena;
    }

    /**
     * @param mixed $Contrasena
     */
    public function setContrasena($Contrasena): void
    {
        $this->Contrasena = $Contrasena;
    }

    /**
     * @return mixed
     */
    public function getEstado(): string
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado): void
    {
        $this->Estado = $Estado;
    }

    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO bd_laborbrand.persona VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(
                $this->Nombres,
                $this->Apellidos,
                $this->Tipo_Documento,
                $this->N_Documento,
                $this->Telefono_Fijo,
                $this->N_Celular,
                $this->Direccion,
                $this->Email,
                $this->Rol,
                $this->Contrasena,
                $this->Estado
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update(): bool
    {
        $result = $this->updateRow("UPDATE bd_laborbrand.persona SET Nombres = ?, Apellidos = ?, Tipo_Documento = ?, N_Documento= ?, Telefono_Fijo = ?, N_Celular = ? ,Direccion = ?, Email = ?, Rol= ?, Contrasena = ?, Estado= ? WHERE Id = ?", array(
                $this->Nombres,
                $this->Apellidos,
                $this->Tipo_Documento,
                $this->N_Documento,
                $this->Telefono_Fijo,
                $this->N_Celular,
                $this->Direccion,
                $this->Email,
                $this->Rol,
                $this->Contrasena,
                $this->Estado,
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
        $arrPersona = array();
        $tmp = new Persona();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Persona = new Persona();
            $Persona->Id = $valor['Id'];
            $Persona->Nombres = $valor['Nombres'];
            $Persona->Apellidos = $valor['Apellidos'];
            $Persona->Tipo_Documento= $valor['Tipo_Documento'];
            $Persona->N_Documento = $valor['N_Documento'];
            $Persona->Telefono_Fijo = $valor['Telefono_Fijo'];
            $Persona->N_Celular = $valor['N_Celular'];
            $Persona->Direccion = $valor['Direccion'];
            $Persona->Email = $valor['Email'];
            $Persona->Rol = $valor['Rol'];
            $Persona->Contrasena = $valor['Contrasena'];
            $Persona->Estado = $valor['Estado'];

            $Persona->Disconnect();
            array_push($arrPersona, $Persona);
        }
        $tmp->Disconnect();
        return $arrPersona;
    }

    public static function searchForId($Id): Persona
    {
        $Persona = null;
        if ($Id > 0){
            $Persona = new Persona();
            $getrow = $Persona->getRow("SELECT * FROM bd_laborbrand.persona WHERE Id =?", array($Id));
            $Persona->Id = $getrow['Id'];
            $Persona->Nombres= $getrow['Nombres'];
            $Persona->Apellidos = $getrow['Apellidos'];
            $Persona->Tipo_Documento= $getrow['Tipo_Documento'];
            $Persona->N_Documento= $getrow['N_Documento'];
            $Persona->Telefono_Fijo = $getrow['Telefono_Fijo'];
            $Persona->N_Celular = $getrow['N_Celular'];
            $Persona->Direccion = $getrow['Direccion'];
            $Persona->Email = $getrow['Email'];
            $Persona->Contrasena= $getrow['Contrasena'];
            $Persona->Estado = $getrow['Estado'];
            $Persona->Disconnect();
            return $Persona;
        } else {
            $Persona->Disconnect();
            unset($Persona);
            return NULL;
        }
    }

    public static function getAll(): array
    {
        return Persona::search("SELECT * FROM bd_laborbrand.persona");
    }

    public static function personaRegistrado($N_Documento): bool
    {
        $result = Persona::search("SELECT id FROM bd_laborbrand.persona where N_Documento = " . $N_Documento);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

}