<?php
/**
 * Created by PhpStorm.
 * User: kaopizadmin
 * Date: 09/11/2017
 * Time: 08:40
 */

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

class UserController extends AdminBaseController
{
    public function listUser(Request $request){
        $users = User::all();
        return $this->render('admin.users.list',['users' => $users]);
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return $this->render('admin.users.add');
        }
        else{
            dd('111');
        }
    }
}