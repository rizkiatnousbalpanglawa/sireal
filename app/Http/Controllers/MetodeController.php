<?php

namespace App\Http\Controllers;

use App\Metode;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    public function index(){
        $metodes = Metode::all();
        return view('metode.index',['metodes' => $metodes]);
    }

    public function create(){
        return view('metode.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode' => 'required'
        ]);

        Metode::create($request->all());
        return redirect('/metode')->with('status','Metode Penunjukan berhasil Ditambahkan!');
    }
}
