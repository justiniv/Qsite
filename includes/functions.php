<?php
	
	
	
	function redirect($location)
	{
		if($location)
		{
			header("Location: {$location}");
			exit;
		}
	}
	
	
	spl_autoload_register(function($class_name) 
	{
    		$class	 	= strtolower($class_name);
    		include $class . '.php';
	});
	
?>