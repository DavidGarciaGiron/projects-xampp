<?php

	include 'conexion.php';
	include '../entidades/User.php';

	class UserDao extends Conexion {
		
		protected static $cnx;

		private static function getConexion() {
			self::$cnx = Conexion::conectar();
		}

		private static function Desconexion() {
			self::$cnx = null;
		}

	    /**
	     * Metodo que sirve para validar el login
	     *
	     * @param      object         $user
	     * @return     boolean
	     */

	    public static function login($user) {
	    	$query = "SELECT * FROM users INNER JOIN rol ON users.id_rol = rol.id_rol WHERE email = :email AND password = :password";

	    	self::getConexion();

	    	$resultado = self::$cnx->prepare($query);
	    	
	    	$resultado->bindValue(":email", $user->getEmail());
	    	$resultado->bindValue(":password", $user->getPassword());
	    	
	    	$resultado->execute();

	    	if ($resultado->rowCount() > 0) {
	    		$filas = $resultado->fetch();
	    		if ( $filas["email"] == $user->getEmail() && 
	    			 $filas["password"] == $user->getPassword() ) {
	    				return true;
	    			}
	    		}
			return false; 
		}

		/**
	     * Metodo que sirve obtener un usuario
	     *
	     * @param      object         $user
	     * @return     object
	    */

		public static function getUser($user) {
			$query = "SELECT * FROM users INNER JOIN rol ON users.id_rol = rol.id_rol WHERE email = :email AND password = :password";

			self::getConexion();

			$resultado = self::$cnx->prepare($query);

			$resultado->bindValue(":email", $user->getEmail());
			$resultado->bindValue(":password", $user->getPassword());

			$resultado->execute();

			$filas = $resultado->fetch();

			$user = new User();
			$user->setId_rol($filas["id_rol"]);
			$user->setFullname($filas["fullname"]);
			$user->setUsername($filas["username"]);
			$user->setEmail($filas["email"]);
			$user->setPassword($filas["password"]);
			$user->setId_rol($filas["id_rol"]);

			return $user;
		}

		/**
	     * Metodo que sirve para registrar usuarios
	     *
	     * @param      object         $user
	     * @return     boolean
	     */

		public static function registrar($user) {
			$query = "INSERT INTO users (fullname,username,email,password,id_rol) VALUES (:fullname,:username,:email,:password,:id_rol)";

			self::getConexion();

			$resultado = self::$cnx->prepare($query);

			$resultado->bindValue(":fullname", $user->getFullname());
			$resultado->bindValue(":username", $user->getUsername());
			$resultado->bindValue(":email", $user->getEmail());
			$resultado->bindValue(":password", $user->getPassword());
			$resultado->bindValue(":id_rol", $user->getId_rol());

			if ($resultado->execute()) {
				return true;
			}

			return false;
		}

	}