<?php

/**
 * Class Utama app
 */
class App
{
	//controller default
	protected $controller = 'home';
	//method default
	protected $method = 'index';
	//parameter default
	protected $parameter = [];
	
	public function __construct()
	{
		$url = $this->parseURL();


		//cek controller ada atau tidak
		//url[0] = nama url index ke 0
		if(file_exists('../app/controllers/'.$url[0].'.php'))
		{
			$this->controller = $url[0];
			//menghilangkan nama controller di url
			unset($url[0]);
		}

		//ambil controller yg baru
		include_once '../app/controllers/' . $this->controller . '.php';
		//timpa dengan nama controller yang baru
		$this->controller = new $this->controller;


		//Method
		if(isset($url[1]))
		{
			//cek method yang ada di dalam controller
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				//hapusMethod nama di url
				unset($url[1]);
			}	
		}

		//Parameter
		if(!empty($url))
		{
			$this->parameter = array_values($url);
		}


		//jalankan controller dan method, serta parameter jika ada
		call_user_func_array([$this->controller,$this->method],$this->parameter);
	}

	//Method pengambil url
	public function parseURL()
	{
		if (isset($_GET['url'])) {
			//memisahkan dari '/'
			$url = rtrim($_GET['url'], '/');
			//memfilter URL
			$url = filter_var($url, FILTER_SANITIZE_URL);
			//memecah url dari '/' kedalam string
			$url = explode('/', $url);
			return $url;
		}
	}


}