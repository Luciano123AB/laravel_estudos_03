<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View {
        
        //As linguas que cada pessoa fala:
        $data = [
            "João" => [
                "Portuguese",
                "Inguês"
            ],

            "Maria" => [
                "Português",
                "Espanhol"
            ],

            "Ana" => [
                "Português",
                "Inglês",
                "Francês"
            ]
        ];

        return view("home", ["pessoas_linguas" => $data]);
    }
}
