<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Return index view
     *
     * @return string
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Return home view
     *
     * @return string
     */
    public function home()
    {
        return redirect()->route('home.index');
    }

    /**
     * Return sumatory
     *
     * @return string
     */
    public function sum($num1,$num2)
    {
        return $num1+$num2;
    }
}
