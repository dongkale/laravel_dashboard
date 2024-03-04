<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("home", [
            'mainMenuCode' => 'MENU_1',
            'subMenuCode' => 'MENU_1_1'
        ]);
    }

    public function menu1_1()
    {
        View::share('mainMenuCode', 'MENU_1');
        View::share('subMenuCode', 'MENU_1_1');

        Log::info("menu1_1");

        return view("home", [
            'mainMenuCode' => 'MENU_1',
            'subMenuCode' => 'MENU_1_1'
        ]);
    }

    public function menu1_2()
    {
        View::share('mainMenuCode', 'MENU_1');
        View::share('subMenuCode', 'MENU_1_2');

        Log::info("menu1_1");

        return view("home", [
            'mainMenuCode' => 'MENU_1',
            'subMenuCode' => 'MENU_1_2'
        ]);
    }

    public function menu2_1()
    {
        View::share('mainMenuCode', 'MENU_2');
        View::share('subMenuCode', 'MENU_2_1');

        Log::info("menu2_1");

        return view("home", [
            'mainMenuCode' => 'MENU_2',
            'subMenuCode' => 'MENU_2_1'
        ]);
    }

    public function menu2_2()
    {
        View::share('mainMenuCode', 'MENU_2');
        View::share('subMenuCode', 'MENU_2_2');

        Log::info("menu1_1");

        return view("home", [
            'mainMenuCode' => 'MENU_2',
            'subMenuCode' => 'MENU_2_2'
        ]);
    }
}
