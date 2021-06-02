<?php namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$datos = $Crud->listarEstudiantes();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('listado', $data);
	}

	public function crear() {
		echo "hola";
		// $datos = [
		// 			"idIdentificacion" => $_POST['identificacion'],
		// 			"apellidos" => $_POST['apellidos'],
		// 			"nombres" => $_POST['nombres'],
		// 			"celular" => $_POST['celular'],					
		// 			"programa" => $_POST['programa']
		// 		];
		// $Crud = new CrudModel();
		// $respuesta = $Crud->insertar($datos);

		// if ($respuesta > 0) {
		// 	return redirect()->to(base_url().'/')->with('mensaje','1');
		// } else {
		// 	return redirect()->to(base_url().'/')->with('mensaje','0');
		// }

	}

}
?>