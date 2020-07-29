<?php
	
	include '../database/UserDao.php';

	class UserControlador {

		public static function login($email, $password) {
			$obj_user = new User();
			$obj_user->setEmail($email);
			$obj_user->setPassword($password);
				
			return UserDao::login($obj_user);	
		}

		public function getUser($email, $password) {
			$obj_user = new User();
			$obj_user->setEmail($email);
			$obj_user->setPassword($password);

			return UserDao::getUser($obj_user);
		}

		public function registrar($fullname, $username, $email, $password, $id_rol) {
			$obj_user = new User();
			$obj_user->setFullname($nombre);
			$obj_user->setUsername($usuario);
			$obj_user->setEmail($email);
			$obj_user->setPassword($privilegio);
			$obj_user->setId_rol($password);

			return UserDao::registrar($obj_user);
		}

	}

?>