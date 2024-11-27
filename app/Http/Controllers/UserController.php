<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function new(){
        echo 'New User!';
    }

    public function edit(){
        echo 'Edit User!';
    }

    public function delete(){
        echo 'Delete User';
    }
}
