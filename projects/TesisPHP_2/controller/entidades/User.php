<?php 

	class User {

		private $id_user;
		private $fullname;
		private $username;
		private $email;
		private $password;
		private $id_rol;
		/**
		* -----------------------------------
		*/
		public function getId_user() {
			return $this->id_user;
		}
		public function setId_user($id_user){
			$this->id_user = $id_user;
		}
/**
		* -----------------------------------
		*/
		public function getFullname() {
			return $this->fullname;
		}
		public function setFullname($fullname){
			$this->fullname = $fullname;
		}
/**
		* -----------------------------------
		*/
		public function getUsername() {
			return $this->username;
		}
		public function setUsername($username){
			$this->username = $username;
		}
/**
		* -----------------------------------
		*/
		public function getEmail() {
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
/**
		* -----------------------------------
		*/
		public function getPassword() {
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
/**
		* -----------------------------------
		*/
		public function getId_rol() {
			return $this->id_rol;
		}
		public function setId_rol($id_rol){
			$this->id_rol = $id_rol;
		}

	}
?>