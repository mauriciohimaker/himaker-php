<?php 

/**
 * Router class to init and start routers
 * 
 * @author 		Recigio Poffo
 * @package 	Aplication
 * 
 */

class RouterRegister
{

	/**
	 * Static method to start routers creation 
	 * 
	 * @param FrontController $frontController
	 * @return null (just add routers to FrontController)
	 */
	public static function start($frontController){
		
		$router = $frontController->getRouter();

	}
	
}


?>