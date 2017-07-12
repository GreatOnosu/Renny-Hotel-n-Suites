<?php
	session_start();
	// require '../Core/Router.php';
	spl_autoload_register(function($class){
		$root = dirname(__DIR__);
		$file = $root . '/' . str_replace('\\', '/', $class) . '.php';
		if(is_readable($file)){
			require $root . '/' . str_replace('\\', '/', $class). '.php';
		}
	});
	$router = new Core\Router();
	$router->add('', ['controller'=> 'Home', 'action'=>'index']);
	$router->add('loginxyz123', ['controller'=> 'Home', 'action'=>'login']);
	$router->add('{controller}/{action}');
	$router->add('{controller}/{id:\d+}/{action}');
	$router->add('admin/{controller}/{action}', ['namespace => Admin']);
	// $url = $_SERVER['QUERY_STRING'];
	// echo "<pre>";
	// 	var_dump($router->getRoutes());
	// 	echo "</pre>";
	// if($router->match($url)){
	// 	echo "<pre>";
	// 	var_dump($router->getParams());
	// 	echo "</pre>";
	// }else{
	// 	echo "No route found for url'$url'";
	// }
	$router->dispatch($_SERVER['QUERY_STRING']);