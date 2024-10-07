<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //menampilakn semua data
    public function index() {
        //return 'Menampilkan daftar pengguna dari controller';
        
        $users = ['John Doe', 'Jane Smith', 'Alice Johnson'];
        // return response()->json($users);
        return view('users.index', compact('users'));
    }

    //menampilkan 1 user data
    public function userOne() {
        $user = new \stdClass();
        $user->name = 'Irfan';
        $user->address = 'Jakarta';
        
        return view('users.one', compact('user'));
    }

    //menampilkan semua data
    public function userAll() {        
        $users = [];

        $user1 = new \stdClass();
        $user1->name = 'Irfan';
        $users[] = $user1;

        $user2 = new \stdClass();
        $user2->name = 'Kurniawan';
        $users[] = $user2;
        
        return view('users.all', compact('users'));
    }
}
