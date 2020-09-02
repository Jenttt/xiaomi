<?php
namespace app\xiaomi\controller;

use think\Controller;

class Register extends Controller{
    public function Index(){
        return $this->fetch("/Register");
    }
}