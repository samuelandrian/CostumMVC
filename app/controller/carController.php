<?php

	class carController extends Controller
	{
		public function index()
		{
			$this->model('car');

			$this->view('car'.DIRECTORY_SEPARATOR.'index',['cars'=>$this->model->getCars()]);//argumen kedua : buat asosiatif array dengan key cars yang berisi $this->model->getCars()

			$this->view->render();

			//$this->model->getCars();//checking
			//var_dump($this->model->getCars());


		}

		public function edit()
		{
			$this->model('car');

			$this->view('car'.DIRECTORY_SEPARATOR.'edit',['cars',$this->model->getCars()]);//argumen kedua : buat asosiatif array dengan key cars yang berisi $this->model->getCars()

			$this->view->render();

			

		}

		public function delete()
		{
			$this->model('car');

			$this->view('car'.DIRECTORY_SEPARATOR.'delete',['cars',$this->model->getCars()]);//argumen kedua : buat asosiatif array dengan key cars yang berisi $this->model->getCars()

			$this->view->render();
		}




		

	}