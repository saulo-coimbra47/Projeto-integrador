<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{

    protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['email', 'name', 'password', 'notification', 'favorite_place'];

    function Register(array $post = [])
    {

        $user = $this->insert([
            'name'  => $post['name'],
            'email' => $post['email'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),


        ]);
        return true;
    }

    public function Login(array $post = [])
    {
        $user = $this->where(['email' => $post['email']])->get()->getRow();


        if (!password_verify($post['password'], $user->password)) {
            return false;
        }
        return $user;
    }

    public function getuserId($email){

        return $this->select('id')->where(['email' => $email])->get()->getRowArray();
        
    }
}
