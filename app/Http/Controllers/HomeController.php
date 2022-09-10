<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        try {

            return view('Home.index');



        } catch (\Exception $ex) {

            abort(500);

        }

    }
}
