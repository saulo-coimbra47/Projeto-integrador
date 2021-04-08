<?php 
namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthController extends BaseController
{
    public function index(){
      
		$data = [];
		$request = service('request');
		if ($request->getMethod()=== 'post') {
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
			} else {

				$data =
					[
						'scripts' => "assets/js/jquery.mask.js",
						'error'  => true,
						'errors' => $validation->getErrors(),

					];
			}
		}

		return view('signup', $data);
	}
        
    public function Login(){
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

					return redirect('Admin');
				} else {
					$data =
						[

							'error'  => true,
							'errors' =>
							[
								'A senha inserida está incorreta'
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
    
}
