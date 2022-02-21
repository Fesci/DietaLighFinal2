<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto.index');
    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'consulta' => 'required',
        ]);

        $mail = new ContactoMailable($request->all());
        Mail::to('tomas.fescina@davinci.edu.ar')->send($mail);
        return redirect()->route('contacto.index')->with('exito','Consulta enviada correctamente');
    }
}

