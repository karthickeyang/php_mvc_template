<?php
/**
 * Created by PhpStorm.
 * User: karthickeyanganesan
 * Date: 07/04/19
 * Time: 12:40 PM
 */
namespace  App\Controllers;

use App\Core\App;

class UsersController {

    public  function index(){
        $users = App::get('database')->selectAll('users');

        return view('users' ,[
            'users' => $users
        ]);
    }

    public function store(){
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        redirect('users');
    }
}