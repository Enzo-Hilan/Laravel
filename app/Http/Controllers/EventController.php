<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Controllers principais

    public function index() {
        return view('welcome');
    }

    public function login() {
        $nome = request('nome');

        return view('events.login', ['nome' => $nome]);
    }

    public function sobre() {
        return view('events.sobre');
    }

    public function projetos() {
        return view('events.projetos');
    }
}
