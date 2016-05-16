<?php
class UsuariosController extends BaseController
{
	public function index(){
		//return "Hola mundo";

		 return Response::json(array("hola"=>"Hola mundo"), 200);
	}
	public function show($id)
	{
	    try{

            $response = [
                'Usuario' => []
            ];
            $statusCode = 200;
            
            $user = Usuario::find($id);
    
            $response = [
                'id' => $user->id,
                'codigousuario' => $user->codigousuario,
                'usuario' => $user->usuario,
                'clave' => $user->clave,
                'edad' => $user->edad
            ];

            
        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }

	}
}