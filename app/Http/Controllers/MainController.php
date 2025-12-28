<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View {
        
        //As linguas que cada pessoa fala:
        $data = [
            "Carlos" => [
                "Portuguese",
                "Inguês"
            ],

            "Mário" => [
                "Português",
                "Espanhol"
            ],

            "Carolina" => [
                "Português",
                "Inglês",
                "Francês"
            ]
        ];

        return view("home", ["pessoas_linguas" => $data]);
    }
}
