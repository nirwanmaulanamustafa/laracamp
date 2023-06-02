<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(){
        return view('index',[
            'title' => 'PPAPP'
        ]);
    }

    public function TurutMengundang($nama)
    {   
        $namadiundang = $nama;
        return view('Invitation',compact('namadiundang'));
    }
}
