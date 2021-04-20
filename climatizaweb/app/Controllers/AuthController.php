<?php

namespace App\Controllers;

use App\Libraries\AuthLibraries;
use App\Libraries\RecoverLib;
use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthController extends BaseController
{
	public function Register()
	{

		$data = [];
		$request = service('request');
		if ($request->getMethod() === 'post') {
			$validation = \Config\Services::validation();

			if ($validation->withRequest($this->request)->run(null, 'signup')) {
				$result = (new AuthModel)->Register($request->getPost());
				if ($result === null) {
					$result = [
						'name' => $result->name,
						'email' => $result->email,
						'senha' => $result->senha,


					];
				}
				session()->setFlashdata('message', 'Registrado com Sucesso');
			} else {

				$data =
					[
						'error'  => true,
						'errors' => $validation->getErrors(),

					];
			}
		}

		return view('signup', $data);
	}

	public function Login()
	{
		$data = [];

		$request = service('request');
		if ($request->getMethod() === 'post') {
			$validation = \Config\Services::validation();
			if ($validation->withRequest($this->request)->run(null, 'login')) {
				$result = (new AuthModel)->Login($request->getPost());


				if ($result !== false) {
					session()->set(
						[
							'id'    => $result->id,
							'name'  => $result->name,
							'email' => $result->email,
							'logged_in' => TRUE
						]
					);

					return redirect('index');
				} else {
					$data =
						[

							'error'  => true,
							'errors' =>
							[
								'Email ou senha esta incorreta.'
							]
						];
				}
			} else {
				$data =
					[
						'error'  => true,
						'errors' => $validation->getErrors()
					];
			}
		}



		return view('signin', $data);
	}

	public function Forgot()
	{
		$request = service('request');
		$forgot = new AuthLibraries();
		$data = [];

		if ($request->getMethod() === 'post') {

			$validation = \Config\Services::validation();
			if ($validation->withRequest($this->request)->run(null, 'recup')) {
				$email = $request->getPost('email');
				$send = $forgot->forgotSendmail($email);
			} else {
				$data =
					[
						'error'  => true,
						'errors' => $validation->getErrors()
					];
			}
		}

		return view('forgot', $data);
	}


	public function Resetpage($token)
	{


		$session = session();


		$data = [];
		$session = session();
		$Libarie = new AuthLibraries();
		$data = $Libarie->GetToken($token);


		if (isset($data[0]) == true) {
			session()->set($data[0]);
		} else {
			session()->setFlashdata('msgError', 'Não existe redefinição para esse usuário ou o link pode ter expirado');
		}
		

		return view('resetpage');
	}


	public function SavePassword(){
		$request = service('request');
		if ($request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            if ($validation->withRequest($this->request)->run(null, 'resetPass')) {
                $session = session();
                $Libarie = new AuthLibraries();
                $id = $session->get('id');

                if ($update = $Libarie->SavePassword($id, $request->getPost()) === true){
					return session()->setFlashdata('messageReset', 'Senha alterada com Sucesso');
				}

                $session->destroy();
            }
        }

        return redirect('signin');
	}



}
