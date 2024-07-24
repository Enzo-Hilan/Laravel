<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
        $nome = "Enzo";
        $idade = 17;
        $pessoas = ["enzo", "ynara", "soraia"];
        $cidades = ["SP", "MG", "RJ"];

        return view('welcome', 
        [
            "nome" => $nome, 
            "age" => $idade, 
            "profissao" => "Programador",
            "pessoas" => $pessoas,
            "cidades" => $cidades
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function entrar() {
        return view('events.entrar');
    }

    public function cadastrar() {

        $name = request('name');
        return view('events.cadastrar', ['name' => $name]);
    }
}
