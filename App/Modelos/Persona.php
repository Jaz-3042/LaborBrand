<?php


namespace App\Modelos;


class Persona
{
    private $Nombres;
    private $Apellidos;
    private $Tipo_Documento;
    private $N_Documento;
    private $Telefono;
    private $N_Celular;
    private $Direccion;
    private $Email;
    private $Rol;
    private $Contraseña;

    /**
     * Persona constructor.
     * @param $Nombres
     * @param $Apellidos
     * @param $Tipo_Documento
     * @param $N_Documento
     * @param $Telefono
     * @param $N_Celular
     * @param $Direccion
     * @param $Email
     * @param $Rol
     * @param $Contraseña
     */
    public function __construct($Nombres, $Apellidos, $Tipo_Documento, $N_Documento, $Telefono, $N_Celular, $Direccion, $Email, $Rol, $Contraseña)
    {
        $this->Nombres = $Nombres;
        $this->Apellidos = $Apellidos;
        $this->Tipo_Documento = $Tipo_Documento;
        $this->N_Documento = $N_Documento;
        $this->Telefono = $Telefono;
        $this->N_Celular = $N_Celular;
        $this->Direccion = $Direccion;
        $this->Email = $Email;
        $this->Rol = $Rol;
        $this->Contraseña = $Contraseña;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->Nombres;
    }

    /**
     * @param mixed $Nombres
     */
    public function setNombres($Nombres)
    {
        $this->Nombres = $Nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->Apellidos;
    }

    /**
     * @param mixed $Apellidos
     */
    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->Tipo_Documento;
    }

    /**
     * @param mixed $Tipo_Documento
     */
    public function setTipoDocumento($Tipo_Documento)
    {
        $this->Tipo_Documento = $Tipo_Documento;
    }

    /**
     * @return mixed
     */
    public function getNDocumento()
    {
        return $this->N_Documento;
    }

    /**
     * @param mixed $N_Documento
     */
    public function setNDocumento($N_Documento)
    {
        $this->N_Documento = $N_Documento;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getNCelular()
    {
        return $this->N_Celular;
    }

    /**
     * @param mixed $N_Celular
     */
    public function setNCelular($N_Celular)
    {
        $this->N_Celular = $N_Celular;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->Rol;
    }

    /**
     * @param mixed $Rol
     */
    public function setRol($Rol)
    {
        $this->Rol = $Rol;
    }

    /**
     * @return mixed
     */
    public function getContraseña()
    {
        return $this->Contraseña;
    }

    /**
     * @param mixed $Contraseña
     */
    public function setContraseña($Contraseña)
    {
        $this->Contraseña = $Contraseña;
    }
    public function MostarDatos()
    {
        echo "<H4>Los datos de la persona son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Nombres: </strong>".$this->getNombres()."</li>";
        echo   "<li><strong>Apellidos: </strong>".$this->getApellidos()."</li>";
        echo   "<li><strong>Telefono: </strong>".$this->getTipoDocumento()."</li>";
        echo   "<li><strong>Telefono: </strong>".$this->getNDocumento()."</li>";
        echo   "<li><strong>Telefono: </strong>".$this->getTelefono()."</li>";
        echo   "<li><strong>Tipo Documento: </strong>".$this->getNCelular()."</li>";
        echo   "<li><strong>Documento: </strong>".$this->getEmail()."</li>";
        echo   "<li><strong>Documento: </strong>".$this->getRol()."</li>";
        echo   "<li><strong>Documento: </strong>".$this->getContraseña()."</li>";
        echo "</ul>";

}