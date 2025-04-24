<?php
class UserController
{
    public function index()
    {
        include __DIR__ . '/../Views/User/index.php';
    }
    public function register()
    {if (session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }

        $error = '';
        $userModel = new UserModel();
        $config = require './config.php';
        $baseURL = $config['baseURL'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
       include './App/Views/User/register.php';
    }

}
