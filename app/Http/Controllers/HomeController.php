<?php

namespace App\Http\Controllers;
//use App\Http\Response; // para evitar usar la ruta completa en el return new. //lo cambiamos para usar el helper.

class HomeController
{
    public function index()
    {
	    // return new \App\Http\Response('home'); // El primer backslash es para que comience desde la raiz.
	    //return new Response('home'); lo cambiamos para usar el helper.

	    return view('home');
    }
}
