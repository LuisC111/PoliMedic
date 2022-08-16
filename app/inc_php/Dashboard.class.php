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
                    ELSE r.name
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

        public function addRole($id)
        {
            
            try {

                $sql = "INSERT INTO role (name, state) VALUES (:id, 1)";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                      
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function tblFamilyUser($id)
        {
            
            try {
                
                $sql = "SELECT u.id as 'ID',
                u.fullname as 'NOMBRE COMPLETO', 
                f.name as 'NUCLEO FAMILIAR', 
                CASE 
                    when u.role_id = 1 THEN 'Administrador'
                    when u.role_id = 2 THEN 'Responsable de la Familia' 
                    when u.role_id = 3 THEN 'Miembro de la Familia' 
                END as 'Rol',
                CASE 
                    when u.state = 1 THEN 'Activo'
                    when u.state = 0 THEN 'Inactivo'
                    else 'Sin Estado'
                END as 'Estado'
                FROM family_core f 
                INNER JOIN user u 
                ON f.id = u.familycore_id 
                where f.id = ?";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1, $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function detalleTblFamilyUser($id){
            try {
                
                $sql = "SELECT u.id as 'ID',
                u.fullname as 'NOMBRE COMPLETO', 
                f.name as 'NUCLEO FAMILIAR', 
                CASE 
                    when u.role_id = 1 THEN 'Administrador'
                    when u.role_id = 2 THEN 'Responsable de la Familia' 
                    when u.role_id = 3 THEN 'Miembro de la Familia' 
                END as 'Rol',
                CASE 
                    when u.state = 1 THEN 'Activo'
                    when u.state = 0 THEN 'Inactivo'
                    else 'Sin Estado'
                END as 'Estado',
                u.email as 'CORREO ELECTRÓNICO',
                u.creation_date as 'FECHA DE CREACIÓN',
                u.identification_number as 'IDENTIFICACIÓN',
                u.identification_type as 'TIPO DE IDENTIFICACIÓN'
                FROM family_core f 
                INNER JOIN user u 
                ON f.id = u.familycore_id 
                where u.id = ?";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1, $id);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
                    
            }catch(PDOException $e){
                
                return false;
                
            }        
        }

        public function addMember($id,$user,$email,$identification_type,$identification_number,$firstname,$lastname,$gender,$birthdate)
        {
            
            try {     
                $temporal_password = $this->generatePassword();
                $hash_password = md5($temporal_password);           
                $sql = "INSERT INTO user (identification_type,identification_number,user,password,fullname,firstname,lastname,gender,birthdate,email,type,state,role_id,familycore_id,creation_date,modification_date)";
                $sql .= " VALUES ( ";
                $sql .= " :identification_type, :identification_number, :user, :password, :fullname, :firstname, :lastname, :gender, :birthdate, :email, :type, :state, :role_id, :familycore_id, :creation_date, :modification_date)";
                $query = $this->dbh->prepare($sql);
                $params = array(
                    ':identification_type' => $identification_type,
                    ':identification_number' => $identification_number,
                    ':user' => $user,
                    ':password' => $hash_password,
                    ':fullname' => $firstname. ' ' .$lastname,
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':gender' => $gender,
                    ':birthdate' => date('Y-m-d', strtotime($birthdate)),
                    ':email' => $email,
                    ':type' => 'Miembro de la Familia',
                    ':state' => 1,
                    ':role_id' => 3,
                    ':familycore_id' => $id,
                    ':creation_date' => date("Y-m-d"),
                    ':modification_date' => null
                );
                $query->execute($params);
                $this->dbh = null;
                $uspa= array();
                $uspa['user'] = $user;
                $uspa['password'] = $temporal_password;
                return $uspa;
                
            }catch(PDOException $e){
                
                return false;
                
            }        
            
        }

        public function generatePassword()
        {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); 
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