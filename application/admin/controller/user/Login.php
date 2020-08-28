<?php
namespace app\admin\controller\user;

use think\Controller;
use think\Request;

class Login extends Controller
{
    //protected $middleware = ['Check'];

    public function add(Request $request){
        $arr = $request->param('code');
        if($arr == 1){
            return "您当前未实名认证，没有权限操作花园";
        }
        echo "欢迎来到花园";
    }

    public function lists(Request $request){
        return "开心";
    }

    public function del(Request $request){
        $arr = $request->param('code');
        if($arr == 1){
            return "no";
        }else{
            return "ok";
        }
    }
}