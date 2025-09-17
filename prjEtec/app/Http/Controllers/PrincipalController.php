<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PrincipalController extends Controller

{
    public static function home() 
    {
        return view('home');
    }
    public static function cursos() 
    {
        return view('cursos');
    }
    public static function departamento() 
    {
        return view('departamento');
    }
    public static function contato() 
    {
        var_dump($_GET);
        return view('contato', ['titulo' => 'Contato (teste)']);
    }
}