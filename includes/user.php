<?php 
	require_once 'functions.php';
	Class user 
	
	{
			private $db;
			private $conn;
			
			function __construct ()
			{
				
				$this->db	=	New Database();
				
				
				
			}
			public function loggedin()
			{
				if (isset($_SESSION['username']))
				{
					return true;
				}
			else
				{
					return false;
				}
			}
			
			public function admin_user()
			{
				if($_SESSION['usertype'] == 'ADMIN001')
				{
					return true; 
				}
			}
			public function verify_email($email)
			{
				$email = trim($email);
				
				if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			public function verify_username($name)
			{
				$name = trim($name);
				
				if(!ctype_alnum($name))
				{
					return false; 
				}
				else
				{
					return true;
				}
			}
			public function verify_names($name)
			{
				$name = trim($name);
				if(!ctype_alpha($name))
				{
					return false; 
				}
				else
				{
					return true;
				}
			}
			
			public function duplicate_user($name)
			{
				$name = trim($name);
				
				$dbase	=	$this->db;
				
					$stmt	= "SELECT * FROM admins WHERE USERNAME = :name";
					
					$query = $dbase->prepare($stmt);
					
					$query->execute([':name'=>$name]);
					
					$rows	=	$query->fetchColumn();
					
					if($row > 0)
					{
						return true;
					}
					else
					{
						return false;
					}
				
			}
			public function register ($username, $first, $last, $email, $password)
			{
				try
				{
					$password	=	password_hash($password, PASSWORD_DEFAULT);
					$dbase		=	$this->db;
					$username 	=	trim($username);
					$email	 	=	trim($email);
					$first		=	trim($first);
					$last 		=	trim($last);
					
					$stmt		 = "INSERT INTO users(USERNAME,EMAIL,PASSWORD, FIRST_NAME, LAST_NAME)";
					$stmt		.= " VALUES(:username, :email, :password, :first, :last)";
					
					$query		=	$dbase->prepare($stmt);
				
					$query->execute([':username'=>$username, ':email'=>$email,':password'=>$password, ':first'=>$first,':last'=>$last]);
					
					return $query;
				}
				catch(PDOException $e)
				{
					echo $e->getMessage;
				}
				
				
				
				
				
				
				
			}
			public function login($username, $email, $password)
			{
				$password	=	password_hash($password);
				$dbase		=	$this->db;
				$stmt		=	"SELECT USERNAME, FIRST_NAME, PASSWORD WHERE USER = :user AND PASSWORD = :pass";
				
				$query		=	$dbase->prepare($stmt);
				$query->execute([':user'=>$user, ':pass'=>$pass]);
				
				$result		=	$query->fetch(PDO::FETCH_ASSOC);
					
				 if(password_verify($password, $result['PASSWORD']))
				 {
					 $_SESSION['USERNAME']		= $user;	
					 $_SESSION['FIRST_NAME']	= $result['FIRST_NAME'];	
					 return true; 
				 }
				 else
				 {
					 return false;
				 }
			}
	}

?>