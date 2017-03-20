<?php
	include 'db.php';
	class User extends DB {
		public $name_;
		public $email;
		private $password;

		function __construct($n=null, $e=null, $p=null) {
			$this->name_ = $n;
			$this->email = $e;
			$this->password = $p;
			DB::__construct();
		}

		function getAllUsers() {
			$sql = 'select * from customers';
			$query = mysqli_query($this->link, $sql);
			$arr = array(); 
			while($row = mysqli_fetch_assoc($query)) {
				$arr[] = $row;
			}
			return $arr;
		}
		function registerUser() {
			//register
			if($this->checkUser($this->email, 'customers', 'customerEmail')) {
				$sql = "INSERT INTO customers(customerName, customerPass, customerEmail) 
				VALUES ('".$this->name_."', '".md5($this->password)."','".$this->email."')";
				$res = mysqli_query($this->link, $sql);
				//session_start();
			}	
		}
		function loginUser($email, $pass) {
			//
			$sql = "select * from 
			customers where customerPass = '".md5($pass)."' and 
			customerEmail = '".$email."'";
			//$sql2 = 'select * from customers';
			$res = mysqli_query($this->link, $sql);
			$r = mysqli_fetch_assoc($res);
			//echo $email;
			//print_r($r);
			session_start();
			$_SESSION['user'] = $r['customerName'];
			$_SESSION['id'] = $r['customerId'];
			//print_r($_SESSION);
		}
		function logoutUser() {
			session_start();
			session_destroy();
		}
		function checkUser($formEmail, $table, $param) {
			$sql = "select $param from $table 
			where $param ='".$formEmail."'";
			$query = mysqli_query($this->link, $sql);
			if(mysqli_num_rows($query) > 0) {
				return false;
			}
			else {
				return true;
			}
		}
	}
?>