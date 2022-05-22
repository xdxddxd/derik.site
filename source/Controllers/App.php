<?php

namespace Source\Controllers;
use Source\Models\SystemUser;

class App{

    public function Login($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/App/Deslogado/Login.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function Perfil($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Perfil.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function Home($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Main.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * Cadastros Dentro Do Sistema
     */
    public function CadUser($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Cadastro/Usuario.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function CadProd($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Cadastro/Produto.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function CadCliente($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Cadastro/Cliente.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * Consultar Dentro do Sistema
     */
    public function ConUser($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Consulta/Usuario.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function ConProd($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Consulta/Produto.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function ConCliente($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Consulta/Cliente.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * PDV
     */
    public function PDV($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/PDV.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * Delivery
     */
    public function Delivery($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Delivery.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * Funções Apenas do Administrador
     */
    public function Config($data)
    {
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Admin/Config.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function Logs($data)
    {
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/App/Logado/Admin/Logs.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    /**
     * Erros
     */
    public function Erro($data){
        require __DIR__."/../views/Static/Head.php";
        // require __DIR__."/../views/Static/SplashScreen.php";
        require __DIR__."/../views/Static/Menu.php";
        require __DIR__."/../views/Static/Erro.php";
        require __DIR__."/../views/Static/Footer.php";
    }

    public function TesteUser($data)
    {
        $user = new SystemUser();
        $user->nome = "Derik";
        $user->email = "contato@xdxddxd.com";
        $user->senha = "xdxddxd";

        if(!$user->save()) {
            echo "<h3>Ooops: {$user->fail()->getMessage()}</h3>";
        }

        echo "<h2>User</h2>";
        var_dump($user->data());
    }

}