<?php
    require_once 'ConexionesBD.class.php';
    session_start();
    date_default_timezone_set('America/Bogota');
    class Login
    {
     
        private static $instancia;
        private $dbh;
     
        private function __construct()
        {
     
            $this->dbh = ConexionesBD::conexion();
     
        }
     
        public static function login()
        {
     
            if (!isset(self::$instancia)) {
     
                $miclase = __CLASS__;
                self::$instancia = new $miclase;
     
            }
     
            return self::$instancia;
     
        }
    
        public function login_users($correo,$pass)
        {
            
            try {
                
                $sql = "SELECT * from usuario WHERE correoUsuario = ? AND passUsuario = ?";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1,$correo);
                $query->bindParam(2,$pass);
                $query->execute();
                $this->dbh = null;
     
                //si existe el usuario
                if($query->rowCount() == 1)
                {
                     
                    $fila  = $query->fetch();
                    $_SESSION['id'] = $fila['idUsuario']; 
                    $_SESSION['cedula'] = $fila['cedulaUsuario'];       
                    $_SESSION['correo'] = $fila['correoUsuario'];   
                    $_SESSION['rol'] = $fila['idRol'];    
                    $_SESSION['nombre'] = $fila['nombreUsuario'];         
                    $_SESSION['apellido'] = $fila['apellidoUsuario']; 
                    $_SESSION['pass'] = $fila['passUsuario'];
                    return true;
        
                }
                
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }



        public function registro_users($user,$email,$password,$identification_type,$identification_number,$firstname,$lastname,$gender,$birthdate)
        {
            
            try {                
                $sql = "INSERT INTO user (identification_type,identification_number,user,password,fullname,firstname,lastname,gender,birthdate,email,type,state,role_id,familycore_id,creation_date,modification_date)";
                $sql .= " VALUES ( ";
                $sql .= " :identification_type, :identification_number, :user, :password, :fullname, :firstname, :lastname, :gender, :birthdate, :email, :type, :state, :role_id, :familycore_id, :creation_date, :modification_date)";
                $query = $this->dbh->prepare($sql);
                $params = array(
                    ':identification_type' => $identification_type,
                    ':identification_number' => $identification_number,
                    ':user' => $user,
                    ':password' => $password,
                    ':fullname' => $firstname. ' ' .$lastname,
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':gender' => $gender,
                    ':birthdate' => date('Y-m-d', strtotime($birthdate)),
                    ':email' => $email,
                    ':type' => 'Responsable de Familia',
                    ':state' => 1,
                    ':role_id' => 2,
                    ':familycore_id' => null,
                    ':creation_date' => date("Y-m-d"),
                    ':modification_date' => null
                );
                $query->execute($params);
                // $this->dbh = null;
                //Validar si se inserto correctamente
                if($query->rowCount() == 1)
                {
                    //Select max(id) from user 
                    $sqlId = "SELECT max(id) as id from user";
                    $queryId = $this->dbh->prepare($sqlId);
                    $queryId->execute();
                    $id = $queryId->fetchColumn();
                    $last = explode(' ', $lastname);
                    
                    $sqlCore = "INSERT INTO family_core (owner_id, name)";
                    $sqlCore .= "VALUES ( ";
                    $sqlCore .= " :owner_id, :name)";
                    $queryCore = $this->dbh->prepare($sqlCore);
                    $params = array(
                        ':owner_id' => $id,
                        ':name' => "FAMILIA ".strtoupper($last[0])
                    );

                    $queryCore->execute($params);

                    if($queryCore->rowCount() == 1)
                    {
                        $sqlF = "SELECT max(id) as id from family_core";
                        $queryF = $this->dbh->prepare($sqlF);
                        $queryF->execute();
                        $familycore_id = $queryF->fetchColumn();


                        $sqlUpdate = "UPDATE user SET familycore_id = :familycore_id WHERE id = :id";
                        $queryUpdate = $this->dbh->prepare($sqlUpdate);
                        $params = array(
                            ':familycore_id' => $familycore_id,
                            ':id' => $id
                        );
                        $queryUpdate->execute($params);
                        if($queryUpdate->rowCount() == 1)
                        {
                            return true;
                        }
                        else
                        {
                            return "c".$queryUpdate;
                        }
                    }else{
                        return "b".$queryId;
                    }
                }else{
                    return "a".$query;
                }
                

                
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        // public function editar_users($cedula,$nombre,$apellido,$correo,$pass)
        // {

        //     try {
                
        //         $sql = "UPDATE usuario SET nombreUsuario = :nombre, apellidoUsuario = :apellido, correoUsuario = :correo, passUsuario = :pass WHERE cedulaUsuario = :cedula";
        //         $query = $this->dbh->prepare($sql);
        //         $params = array(
        //             ':cedula' => $cedula,
        //             ':nombre' => $nombre,
        //             ':apellido' => $apellido,
        //             ':correo' => $correo,
        //             ':pass' => $pass
        //         );
        //         $query->execute($params);
        //         $this->dbh = null;
        //         //Validar si se inserto correctamente
        //         if($query->rowCount() == 1)
        //         {
        //             $_SESSION['correo'] = $correo;   
        //             return true;
        //         }else{
        //             return false;
        //         }
                

                
        //     }catch(PDOException $e){
                
        //         return false;
                
        //     }        
            
        // }

      
        
        public function cerrar_sesion()
        {
            session_destroy();
            header("Location: ../../index.php");
        }
     
    
        
    
    
 
        // Evita que el objeto se pueda clonar
        public function __clone()
        {
     
            trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
     
        }
 
    }
?>