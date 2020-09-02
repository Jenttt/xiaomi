<?php
namespace app\xiaomi\controller;

use think\Controller;

class Login extends Controller{
    public function Index(){
        return $this->fetch("/Login");
    }
}