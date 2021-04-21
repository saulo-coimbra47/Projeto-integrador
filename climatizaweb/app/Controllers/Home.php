<?php

namespace App\Controllers;

use App\Libraries\Curl;
use App\Libraries\RecoverLib;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index()
    {
        return view('index.php');
    }
}