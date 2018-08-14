<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');
    }
    public function login(){
        $this->display('login');
    }
    public function free(){
        $this->display('free');
    }
    public function sign(){
        $this->display('sign');
    }
    public function oreopro(){
        $this->display('oreopro');
    }
    public function usercenter(){
        $this->display('usercenter');
    }
}