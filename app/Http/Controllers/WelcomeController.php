<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Validator;


class WelcomeController extends Controller {

    // ===================== Validadores ====================
    protected function validatorContacto(array $data){
        return Validator::make($data, [
            'nombre'       => 'required',
            'apellido'     => 'required',
            'correo'       => 'required|email',
            'telefono'     => 'required',
            'empresa'      => 'required',
            'mensaje'      => 'required',
        ]);
    }

    public function saveDataContacto(Request $request) {
		date_default_timezone_set('America/Mexico_City');
		$input = $request->all();
		$Validator = $this->validatorContacto($input);

		if($Validator->passes()){
            //Post al nuevo Kiper
            $datos = [
                'nombre' => $request -> nombre,
                'apellido' => $request -> apellido,
                'correo' => $request -> correo,
                'telefono' => $request -> telefono,
                'empresa' => $request -> empresa,
                'mensaje' => $request -> mensaje,
                'utm_campaign' => $request -> utm_campaign,
                'utm_term' => $request -> utm_term
            ];
        
            try{
                $client = new Client();
                $result = $client->request('POST','https://laaldea.kiper.io/api/v1/forms/register?token=r5qDTeMwN112O7q12xOx2uJ6r77D9l51', ['form_params'=> $datos]);

                $json['success'] = "Datos guardados";
                return json_encode($json['success']);
            
            }catch(Exception $e){
            
                return json_encode('Error',400);
            }
		}

		$json['errors'] = $Validator->errors();
		return json_encode($json['errors']);
	}
}
