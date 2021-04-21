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

    public function alterNameSP($data){

        $sql = 'CALL alter_name_sp( :id: , :name:);';
        $res = $this->db->query($sql, $data);

        return;
        
    }

    public function alterPlaceSP($data){

        $sql = 'CALL alter_place_sp( :id: , :favorite_place:);';
        $res = $this->db->query($sql, $data);

        return;
        
    }

    public function alterPasswordSP($data){

        $sql = 'CALL alter_password_sp( :id: , :password:);';
        $res = $this->db->query($sql, $data);

        return;
        
    }

}
