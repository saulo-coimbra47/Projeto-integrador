<?php

namespace App\Libraries;

use App\Models\AuthModel;
use CodeIgniter\I18n\Time;
use DateTime;

class AuthLibraries
{



    public function GenerateToken($email)
    {
        helper('text');
        $myTime = (new Time)->format('Y-m-d H:i:s');
        $token =  random_string('crypto');
        $db = db_connect();





        $getId = $db->table('users')
            ->select('id')->where(['email' => $email])->get()->getRow();

    

        $forgot = $db->table('recovered_password');
        $data =([
            'user_id' => $getId->id,
            'issue_date' => $myTime,
            'token' => $token
        ]);



        $forgot->insert($data);


        return $token;
        $db->close();
    }

    public function forgotSendmail($post)
    {
        $data = [];

        $token = (new AuthLibraries)->GenerateToken($post);
        $email = \Config\Services::email();
        $to = 'climatizaweb@gmail.com';
        $link = 'localhost/newpassword/';
        $email->setFrom($to, 'Equipe Climatiza');
        $email->setTo($post);
        $email->setSubject('Recuperação de Senha!');
        $message = "Clique aqui para recuperar sua senha <br> <a href=" . base_url('newpassword/') . "/" . $token;
        $email->setMessage($message);

        if ($email->send()) {
            return $sucess = session()->setFlashdata('sucess', 'Recuperação enviada no E-mail.');
        }
    }

    public function GetToken($token){

        $db = db_connect();
        $builder = $db->table('users AS u')
            ->select('token, user_id, u.id, email')
            ->join('recovered_password ', 'u.id = user_id')
            ->where(['token' => $token])
            ->get()
            ->getResultArray();

            
            
            return $builder;

        $db->close();
    }


    public function SavePassword($id, $password){
        
        $db = db_connect();
        $password = password_hash($password['password'], PASSWORD_DEFAULT);
        $builder = $db->table('users')
            ->where('id', $id)
            ->set('password', $password)
            ->update();
       
        $db->close();
        return true;
    }

    public function deletaTokenSP($data){
        
        $db = db_connect();
        $sql = 'CALL deleta_token_sp(:id:);';
        $db->query($sql, $data);

        $db->close();
        
    }

}
