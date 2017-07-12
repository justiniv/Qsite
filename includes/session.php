<?php
	require_once("functions.php");
	
	session_start();
		
		
		
		function login_check ()
			{
				return isset($_SESSION['username']);
			}
		
		function confirm_login()
			{
				if(!login_check())
					{
						redirect("http://www.quantinel.com/signin.php");
					}
			}
?>