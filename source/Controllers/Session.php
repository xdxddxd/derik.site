<?php

namespace Source\Controllers;
use Source\Models\SystemUser;

class Session{

    public function Login($data)
    {
        
        if($data['login'] == 'Convidado') {
            $_SESSION['USER'] = [
                'name' => 'Convidado',
                'loged_at' => getdate(),
            ];

            echo json_encode([
                'redirect' => URL_BASE,
                'code' => true,
                'message' => "Iniciando Sistema como Convidado",
                'title' => "Bem Vindo !",
                'id' => uniqid()
            ]);
        } else if ($data['login'] == 'Admin') {
            echo json_encode($data);
        }

    }

    public function Logout($data)
    {
        unset($_SESSION['USER']);
        echo json_encode([
            'redirect' => URL_BASE,
            'code' => true,
            'message' => "Saindo do Sistema",
            'title' => "Até Breve !",
            'id' => uniqid()
        ]);
    }

}