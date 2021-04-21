<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $signup = [
		'name' => [
			'label' => 'Nome',
			'rules'  => 'required',
	
		],
		'email'    => [
			'rules'  => 'required|valid_email|is_unique[users.email]',
			'errors' => [
				'valid_email' => 'Por favor, verifique o campo Email. inválido.'
			]
		],

		'password'  => [

			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',

		],

		
		'confirm'  => [

			'label' => 'Confirmar Senha',
			'rules' => 'required|min_length[8]|max_length[30]|matches[password]',

		]
	];

	public $login =
	[
		'email' =>
		[
			'label' => 'E-mail',
			'rules' => 'required|valid_email|is_not_unique[users.email]',
		],
		'password' =>
		[
			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',
		],
	];
	public $recup = [
		'email' => [
			'label' => 'E-mail',
			'rules' => 'required|valid_email|is_not_unique[users.email]'
		]
	];

	public $resetPass =[
		'password'  => [

			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',

		],

		
		'confirm'  => [

			'label' => 'Confirmar Senha',
			'rules' => 'required|min_length[8]|max_length[30]|matches[password]',

		]
	];

}
