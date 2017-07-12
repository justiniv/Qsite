<?php

	class Database
	{
		private $host 		= "localhost";
		private $db_name 	= "###################";
    		private $username	= "###############";
    		private $password	= "#################";
    		private $port		= "3306";
    		private $charset	= "utf8";	
    		private $dsn;
    		public $conn;
    		
    		
    		public function dbconnection()
    		{
    			try
    			{
    			
    				$this->dsn	= 'mysql:host=' . $this->host . ';dbname= ' . $this->db_name . 'port=' . $this->port .';chartset=' . $this->charset;
    			
    				$this->opt	=	[
    								PDO::ATTR_ERRMODE			=>	PDO::ERRMODE_EXCEPTION,
								PDO::ATTR_DEFAULT_FETCH_MODE		=>	PDO::FETCH_ASSOC,
								PDO::ATTR_EMULATE_PREPARES		=>	false,
							];
			
				$this->conn	= new PDO ($this->dsn, $this->username, $this->password, $opt);
   			}
   			catch(PDOException $e)
   			{
   				 echo "Connection error: " . $e->getMessage();
   			}
   			
   			return $this->conn;
    		}
    		
    		
	}


?>