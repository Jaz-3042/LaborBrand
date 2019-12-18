<?php


namespace App\Controladores;
require(__DIR__.'/../Modelos/Departamento.php');
use App\Modelos\Departamento;

if(!empty($_GET['action'])){
    DepartamentoControlador::main($_GET['action']);
}

class DepartamentoControlador
{
    static function main($action)
    {
        if ($action == "create") {
            DepartamentoControlador::create();
        } else if ($action == "edit") {
            DepartamentoControlador::edit();
        } else if ($action == "searchForID") {
            DepartamentoControlador::searchForID($_REQUEST['Id']);
        } /*else if ($action == "activate") {
            DepartamentoControlador::activate();
        } else if ($action == "Inactivate") {
            DepartamentoControlador::inactivate();
        }/*else if ($action == "login"){
            UsuariosController::login();
        }else if($action == "cerrarSession"){
            UsuariosController::cerrarSession();
        }*/

    }

    static public function create()
    {
        try {
            $arrayDepartamento = array();
            $arrayDepartamento['Nombre'] = $_POST['Nombre'];
            $arrayDepartamento['Codigo'] = $_POST['Codigo'];
            if(!Departamento::departamentoRegistrado($arrayDepartamento['Nombre'])){
                $Departamento = new Departamento ($arrayDepartamento);
                if($Departamento->create()){
                    header("Location: ../../Vistas/modules/departamento/index.php?respuesta=correcto");
                }
            }else{
                header("Location: ../../Vistas/modules/departamento/create.php?respuesta=error&mensaje=Persona ya registrado");
            }
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/departamento/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }

    /*public static function personaIsInArray($idPersona, $ArrPersonas){
        if(count($ArrPersonas) > 0){
            foreach ($ArrPersonas as $Persona){
                if($Persona->getIdPersona() == $idPersona){
                    return true;
                }
            }
        }
        return false;
    }

    static public function selectPersona ($isMultiple=false,
                                          $isRequired=true,
                                          $id="idConsultorio",
                                          $nombre="idConsultorio",
                                          $defaultValue="",
                                          $class="",
                                          $where="",
                                          $arrExcluir = array()){
        $arrPersonas = array();
        if($where != ""){
            $base = "SELECT * FROM persona WHERE ";
            $arrPersonas = Persona::buscar($base.$where);
        }else{
            $arrPersonas = Persona::getAll();
        }

        $htmlSelect = "<select ".(($isMultiple) ? "multiple" : "")." ".(($isRequired) ? "required" : "")." id= '".$id."' name='".$nombre."' class='".$class."'>";
        $htmlSelect .= "<option value='' >Seleccione</option>";
        if(count($arrPersonas) > 0){
            foreach ($arrPersonas as $persona)
                if (!UsuariosController::personaIsInArray($persona->getIdPersona(),$arrExcluir))
                    $htmlSelect .= "<option ".(($persona != "") ? (($defaultValue == $persona->getIdPersona()) ? "selected" : "" ) : "")." value='".$persona->getIdPersona()."'>".$persona->getNombres()." ".$persona->getApellidos()."</option>";
        }
        $htmlSelect .= "</select>";
        return $htmlSelect;
    }*/
    static public function edit ()
    {
        try {
            $arrayDepartamento = array();
            $arrayDepartamento['Nombre'] = $_POST['Nombre'];
            $arrayDepartamento['Codigo'] = $_POST['Codigo'];
            $arrayDepartamento['Id'] = $_POST['Id'];

              $user = new Departamento($arrayDepartamento);
              $user->update();

            header("Location: ../../Vistas/modules/departamento/show.php?id=".$user->getId()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/departamento/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    /*static public function editar (){
            try {
                $arrayPersona = array();
                $arrayPersona['Tipo_Documento'] = $_POST['Tipo_Documento'];
                $arrayPersona['Documento'] = $_POST['Documento'];
                $arrayPersona['Nombres'] = $_POST['Nombres'];
                $arrayPersona['Apellidos'] = $_POST['Apellidos'];
                $arrayPersona['Telefono'] = $_POST['Telefono'];
                $arrayPersona['Direccion'] = $_POST['Direccion'];
                $arrayPersona['Correo'] = $_POST['Correo'];
                $arrayPersona['NRP'] = (!empty($_POST['NRP']) ? $_POST['NRP'] : NULL);
                $arrayPersona['Profesion'] = (!empty($_POST['NRP']) ? $_POST['Profesion'] : NULL);
                $arrayPersona['Usuario'] = $_POST['Usuario'];
                $arrayPersona['Contrasena'] = $_POST['Contrasena'];
                $arrayPersona['Tipo_Usuario'] = $_POST['Tipo_Usuario'];
                $arrayPersona['Observaciones'] = (!empty($_POST['Observaciones']) ? $_POST['Observaciones'] : NULL);
                $arrayPersona['Estado'] = $_POST['Estado'];
                $arrayPersona['idPersona'] = $_POST['idPersona'];

                //Subir el archivo
                if (!empty($_FILES['Foto']) && ($_FILES['Foto']["name"] != "" )){
                    var_dump($_FILES['Foto']);
                    $NameFile = GeneralFunctions::SubirArchivo($_FILES['Foto'],'../Vista/filesUploaded/');
                    if ($NameFile != false){
                        $arrayPersona['Foto'] = $NameFile;
                    }else{
                        throw new Exception('La imagen no se pudo subir.');
                    }
                }else{
                    $persona = UsuariosController::buscarID($arrayPersona['idPersona']);
                    $arrayPersona['Foto'] = $persona->getFoto();
                }

                $person = new Persona($arrayPersona);
                $person->editar();

                header("Location: ../Vista/modules/persona/view.php?id=".$person->getIdPersona()."&respuesta=correcto");
            } catch (Exception $e) {
                var_dump($e);
                //header("Location: ../Vista/modules/persona/edit.php?respuesta=error");
            }
        }
*/
    /*static public function activate (){
        try {
            $ObjDepartamento = Departamento::searchForId($_GET['Id']);
            $ObjDepartamento->setEstado("Activo");
            if($ObjDepartamento->update()){
                header("Location: ../../Vistas/modules/departamento/index.php");
            }else{
                header("Location: ../../Vistas/modules/departamento/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../    Vistas/modules/departamento/index.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function inactivate (){
        try {
            $ObjDepartamento = Departamento::searchForId($_GET['Id']);
            $ObjDepartamento->setEstado("Inactivo");
            if($ObjDepartamento->update()){
                header("Location: ../../Vistas/modules/departamento/index.php");
            }else{
                header("Location: ../../views/modules/departamento/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../views/modules/departamento/index.php?respuesta=error");
        }
    }
*/
    static public function searchForID ($Id){
        try {
            return Departamento::searchForId($Id);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../views/modules/departamento/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return Departamento::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vista/modules/departamento/manager.php?respuesta=error");
        }
    }
/*
        public function buscar ($Query){
            try {
                return Departamento::buscar($Query);
            } catch (Exception $e) {
                header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
            }
        }
/*
        static public function asociarEspecialidad (){
            try {
                $Persona = new Persona();
                $Persona->asociarEspecialidad($_POST['Persona'],$_POST['Especialidad']);
                header("Location: ../Vista/modules/persona/managerSpeciality.php?respuesta=correcto&id=".$_POST['Persona']);
            } catch (Exception $e) {
                header("Location: ../Vista/modules/persona/managerSpeciality.php?respuesta=error&mensaje=".$e->getMessage());
            }
        }

        static public function eliminarEspecialidad (){
            try {
                $ObjPersona = new Persona();
                if(!empty($_GET['Persona']) && !empty($_GET['Especialidad'])){
                    $ObjPersona->eliminarEspecialidad($_GET['Persona'],$_GET['Especialidad']);
                }else{
                    throw new Exception('No se recibio la informacion necesaria.');
                }
                header("Location: ../Vista/modules/persona/managerSpeciality.php?id=".$_GET['Persona']);
            } catch (Exception $e) {
                var_dump($e);
                //header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
            }
        }

        public static function login (){
            try {
                if(!empty($_POST['Usuario']) && !empty($_POST['Contrasena'])){
                    $tmpPerson = new Persona();
                    $respuesta = $tmpPerson->Login($_POST['Usuario'], $_POST['Contrasena']);
                    if (is_a($respuesta,"Persona")) {
                        $hydrator = new ReflectionHydrator(); //Instancia de la clase para convertir objetos
                        $ArrDataPersona = $hydrator->extract($respuesta); //Convertimos el objeto persona en un array
                        unset($ArrDataPersona["datab"],$ArrDataPersona["isConnected"],$ArrDataPersona["relEspecialidades"]); //Limpiamos Campos no Necesarios
                        $_SESSION['UserInSession'] = $ArrDataPersona;
                        echo json_encode(array('type' => 'success', 'title' => 'Ingreso Correcto', 'text' => 'Sera redireccionado en un momento...'));
                    }else{
                        echo json_encode(array('type' => 'error', 'title' => 'Error al ingresar', 'text' => $respuesta)); //Si la llamda es por Ajax
                    }
                    return $respuesta; //Si la llamada es por funcion
                }else{
                    echo json_encode(array('type' => 'error', 'title' => 'Datos Vacios', 'text' => 'Debe ingresar la informacion del usuario y contraseña'));
                    return "Datos Vacios"; //Si la llamada es por funcion
                }
            } catch (Exception $e) {
                var_dump($e);
                header("Location: ../login.php?respuesta=error");
            }
        }

        public static function cerrarSession (){
            session_unset();
            session_destroy();
            header("Location: ../Vista/modules/persona/login.php");
        }*/
}