<?php
    require_once 'ConexionesBD.class.php';
    session_start();
    date_default_timezone_set('America/Bogota');
    class Dashboard
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
    
    
        public function tblUser()
        {
            
            try {
                
                $sql = "SELECT u.id as ID,
                u.fullname as 'NOMBRE COMPLETO',
                u.user as 'USUARIO',
                u.email as 'CORREO ELECTRONICO',
                CASE 
                    WHEN u.role_id = 1 THEN 'Administrador'
                    WHEN u.role_id = 2 THEN 'Responsable de Familia'
                    WHEN u.role_id = 3 THEN 'Usuario'
                    ELSE 'Sin Rol'
                END AS 'ROL',
                f.name as 'NUCLEO FAMILIAR',
                CASE 
                    WHEN u.state = 1 THEN 'Activo'
                    WHEN u.state = 0 THEN 'Inactivo'
                    ELSE 'Sin Estado'
                END AS 'ESTADO'
                from user u
                inner join family_core f 
                on u.familycore_id = f.id";
                $query = $this->dbh->prepare($sql);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function detalleTblUser($id)
        {
            
            try {
                
                $sql = "SELECT 
                u.id as ID,
                u.fullname as 'NOMBRE COMPLETO',
                u.identification_type as 'TIPO DE IDENTIFICACION',
                u.identification_number as 'IDENTIFICACION',
                u.user as 'USUARIO',
                u.email as 'CORREO ELECTRONICO',
                CASE 
                    WHEN u.role_id = 1 THEN 'Administrador'
                    WHEN u.role_id = 2 THEN 'Responsable de Familia'
                    WHEN u.role_id = 3 THEN 'Usuario'
                    ELSE 'Sin Rol'
                END AS 'ROL',
                f.name as 'NUCLEO FAMILIAR',
                CASE 
                    WHEN u.state = 1 THEN 'Activo'
                    WHEN u.state = 0 THEN 'Inactivo'
                    ELSE 'Sin Estado'
                END AS 'ESTADO',
                u.gender as 'GENERO',
                u.birthdate as 'FECHA DE NACIMIENTO',
                u.creation_date as 'FECHA DE CREACION'
                from user u
                inner join family_core f 
                on u.familycore_id = f.id
                where u.id = :id";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function inactiveUser($id)
        {
            
            try {
                
                $sql = "UPDATE user SET state = 0 WHERE id = :id";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function tblFamily_core(){

            try {
                
                $sql = "SELECT 
                f.id as ID, 
                u.fullname as 'RESPONSABLE DEL NUCLEO FAMILIAR', 
                f.name as 'NOMBRE DEL NUCLEO FAMILIAR',
                COUNT(*) as 'NÚMERO DE MIEMBROS'
                from family_core f 
                inner join user u 
                on f.owner_id = u.id
                GROUP BY f.id";
                $query = $this->dbh->prepare($sql);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            

        }

        public function detalleTblFamily_core($id){

            try {
                
                $sql = "SELECT 
                f.id as ID, 
                u.fullname as 'RESPONSABLE DEL NUCLEO FAMILIAR', 
                f.name as 'NOMBRE DEL NUCLEO FAMILIAR',
                COUNT(*) as 'NÚMERO DE MIEMBROS'
                from family_core f 
                inner join user u 
                on f.owner_id = u.id
                where f.id = :id
                GROUP BY f.id";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            

        }


        public function tblRole()
        {
            
            try {
                
                $sql = "SELECT r.id as ID,
                CASE 
                    WHEN r.name = 'admin' THEN 'Administrador'
                    WHEN r.name = 'owner' THEN 'Responsable de Familia'
                    WHEN r.name = 'member' THEN 'Miembro de Familia'
                    ELSE 'Sin Rol'
                END AS 'NOMBRE DEL ROL',
                CASE 
                    WHEN r.state = 1 THEN 'Activo'
                    WHEN r.state = 0 THEN 'Inactivo'
                    ELSE 'Sin Estado'
                END AS 'ESTADO'
                from role r";
                $query = $this->dbh->prepare($sql);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function detalleTblRole($id)
        {
            
            try {
                
                $sql = "SELECT r.id as ID,
                CASE 
                    WHEN r.name = 'admin' THEN 'Administrador'
                    WHEN r.name = 'owner' THEN 'Responsable de Familia'
                    WHEN r.name = 'member' THEN 'Miembro de Familia'
                    ELSE 'Sin Rol'
                END AS 'NOMBRE DEL ROL',
                CASE 
                    WHEN r.state = 1 THEN 'Activo'
                    WHEN r.state = 0 THEN 'Inactivo'
                    ELSE 'Sin Estado'
                END AS 'ESTADO'
                from role r
                where r.id = :id";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function inactiveRole($id)
        {
            
            try {
                
                $sql = "UPDATE role SET state = 0 WHERE id = :id";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
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