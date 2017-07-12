<?php
	
	
	
	function redirect($location)
	{
		if($location)
		{
			header("Location: {$location}");
			exit;
		}
	}
	/*
	function __autoload($class_name) 
	{
		$class_name 	= strtolower($class_name);
		$path 		=  $class_name . ".php";
		
		if(file_exists($path))
		{
			require_once($path);
			
			echo "Class file found. <br />";
		}
		else 
		{
			die("The file ". $class_name .".php could not be found.");
		}
		
	}
	*/
	
	spl_autoload_register(function($class_name) 
	{
    		$class	 	= strtolower($class_name);
    		include $class . '.php';
	});
	
?>