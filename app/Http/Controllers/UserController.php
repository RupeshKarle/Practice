<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function passData($id) {
        return view("menu", ['id'=>$id]);
    }
    public function getData() {
        return User::all();
    }
    public function testFunction() {
        return ['test'=> 'test array'];
    }
}
