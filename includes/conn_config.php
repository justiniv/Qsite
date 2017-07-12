<?php


					$opt		=	[
										PDO::ATTR_ERRMODE			=>	PDO::ERRMODE_EXCEPTION,
										PDO::ATTR_DEFAULT_FETCH_MODE		=>	PDO::FETCH_ASSOC,
										PDO::ATTR_EMULATE_PREPARES		=>	false,
									];
								
					$adminuser		=	"quantine_juju";
				
					$pass			=	"############";
					
					$dbname			=	"##############";
				 
					$dsn			=	'mysql:host=localhost;dbname=quantine_users;port=3306;charset=utf8';
				 	
				
					$memdbase	=	new PDO ($dsn, $adminuser, $pass, $opt);
					
					
					/*
					$query 		=	$memdbase->prepare("SELECT ID FROM admins");
					
					$query->execute();
					
					$result		=	$query->fetch(PDO::FETCH_NUM);
					
					if( $result > 0)
					{
						echo " database connected successfully.";
					}
					*/
					
					
?>