<?php
/**
 * Created by PhpStorm.
 * User: kaopizadmin
 * Date: 07/11/2017
 * Time: 09:11
 */

namespace App\Http\Controllers\Admin;


class HomeController extends AdminBaseController
{
    public function index(){
        return $this->render('admin.index');
    }
}