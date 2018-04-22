<?php

class Controller
{
	protected $view;
	protected $model;
	public function view($viewName,$data=[])//$viewName location view, $data parameter yang ingin dipasssing
	{
		$this->view = new View($viewName,$data);//variabel $view menjadi an instance dari Class View
		return $this->view;
	}

	public function model($modelName,$data=[])
	{
		if(file_exists(MODEL.$modelName.'.php'))
		{
			require MODEL.$modelName.'.php';//dalam hal ini misalkan $modelName di assign car maka
			$this->model = new $modelName;//akan mendaklarasikan $model sebagai instance baru dari class car
		}
	}

}