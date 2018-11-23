<?php
	namespace AppLaravel\Http\Controllers;

	use AppLaravel\Http\Controllers\Controller;

	/**
	* 
	*/
	class PruebaController extends Controller
	{
		
		public function prueba($param)
		{
			return 'Hola desde el controlador: PruebaController y mandando un parametro: '.$param;
		}
	}
