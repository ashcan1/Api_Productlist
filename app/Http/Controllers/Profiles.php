<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    function list() {

$data = Http:: get('https://dev.shepherd.appoly.io/fruit.json')->json();
    return view('profiles', ['data' => $data['menu_items']]);

    }

}
