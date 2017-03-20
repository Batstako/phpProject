<?php

	class DB {
		private $host = 'localhost';
		private $user = 'root';
		private $pass = 'c1715am';
		private $db = 'trainsoft1';
		protected $link;

		function __construct() {
			$this->link = new mysqli($this->host, 
				$this->user, $this->pass, $this->db);
			
			if($this->link->error) {
				echo 'Error';
			    exit();
			}
			else {
				//echo 'No error';
			}
			//second way
			/*if (mysqli_connect_errno($this->link)) {
				echo 'Error';
			    exit();
			}
			else {
				echo 'No error';
			}*/

		}
	}
