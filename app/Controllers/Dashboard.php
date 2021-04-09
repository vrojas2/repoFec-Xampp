<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\Libro;

// class Dashboard extends BaseController ??? porque cambio a Controller??

class Dashboard extends Controller

{
	public function index()
	{
		$this->loadView("index");
	}

	public function biblioteca()
	{
		$this->loadView("biblioteca");
	}

	public function loadView($view=null)
	{
		echo view("template/nav");
		echo view($view);
		echo view("template/footer");
	}

	//biblioteca
	public function bibliotecaAdmin()
	{
		$libro= new Libro();
		$datos['libros']= $libro->orderby('id','ASC')->findAll();
		$datos['navAdmin']= view('admin/templateAdmin/navAdmin');
		$datos['footer']= view('admin/templateAdmin/footer');

		return view('admin/biblioteca/biblioteca',$datos);
	}

	public function registroBiblioteca()
	{
		// $this->loadViewAdmin("admin/biblioteca/registroBiblioteca");
		$datos['navAdmin']= view('admin/templateAdmin/navAdmin');
		$datos['footer']= view('admin/templateAdmin/footer');
		return view('admin/biblioteca/registroBiblioteca',$datos);
		
	}

	public function guardarLibro()
	{
		$libro= new Libro();

		if($archivo=$this->request->getFile('archivo') /*|| $archivo=$this->request->getFile('archivo')*/){
			$nuevoNombre= $archivo->getRandomName();
			$archivo->move('../public/fileBiblioteca/',$nuevoNombre);
			//$archivo->move('../../public/fileBiblioteca/');
			$datos=[
				'titulo'=> $this->request->getVar('titulo'),
				// 'archivo'=>$archivo,
				'archivo'=>$nuevoNombre
			];
			$libro->insert($datos);
		}else{
			echo "algo ocurrio";
		}
		echo "Ingresado a la BD";
	}

	public function updateBiblioteca()
	{
		$this->loadViewAdmin("admin/biblioteca/updateBiblioteca");
		$libro= new Libro();
		$datos['libros']= $libro->orderby('id','ASC')->findAll();
		// $this->loadViewAdmin("admin/biblioteca/biblioteca",$datos);
		echo view("admin/templateAdmin/navAdmin");
		echo view('admin/biblioteca/biblioteca',$datos);
		echo view("admin/templateAdmin/footer");
	}
	/*
	// include de Admin
	public function loadViewAdmin($view=null)
	{
		echo view("admin/templateAdmin/navAdmin");
		echo view($view);
		echo view("admin/templateAdmin/footer");
	}*/

	/*
	// subir datos predefinidos a la bda con conexiones antes config en databases
	public function index()
	{
		$model = new UsersModel();
		$id = $model-> insert ([
			"name"=>"Victor",
			"username" => "viroba",
			"password" => "1234",
			"role" => "1",
		]);
	}*/

	/*
	// explicacion de funciones
	public function index()
	{
		//return view('welcome_message');
		//echo "dentro de dashborad";
		//$this->saludo("dashboard-slug",123);
		$data['mydata1']="testing1";
		$data['mydata2']="testing2";

		return view('form',$data);
	}

	//proteger la funcion 	protected
	public function saludo($slug=null,$id=null)
	{
		echo $slug."<br>";
		echo $id."<br>";
	}

	public function template() {
		$parser = \Config\Services::parser();
		$data = [
			'title' => 'Titulo de mi sitio web',
			"content" => "Lorem ipsum dolor sit amet",
			"footer" => "Adios"
		];
		echo $parser -> setData($data)->render('template');
	}
	*/
}