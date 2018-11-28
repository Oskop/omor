<?php 

/**
 * Controller
 */
class Controller
{
	public function view($view,$data=[])
	{
		//cek view
		require_once '../app/views/'. $view . '.php';
	}

}