<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function integra() {
        return view('integra');
    }

    public function inscricao() {
        return view('inscricao');
    }
}
