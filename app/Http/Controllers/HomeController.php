<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(): View
    {
        return view('home');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function adminHome(): View
    {
        return view('adminHome');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function managerHome(): View
    {
        return view('managerHome');
    }

    public function superHome(): View
    {
        return view('superadminHome');
    }
    
    public function dosenHome(): View
    {
        return view('dosenHome');
    }
    public function mahasiswaHome(): View
    {
        return view('mahasiswaHome');
    }
    public function tendikHome(): View
    {
        return view('tendikHome');
    }

    public function admkeuangan(): View
    {
        return view('admkeuanganHome');
    }

    public function admakademik(): View
    {
        return view('admakademikHome');
    }

    public function direktur(): View
    {
        return view('direkturHome');
    }

    public function wakil1(): View
    {
        return view('wakil1Home');
    }

    public function wakil2(): View
    {
        return view('wakil2Home');
    }

    public function wakil3(): View
    {
        return view('wakil3Home');
    }

    public function admlppm(): View
    {
        return view('admlppmHome');
    }

    public function admsdm(): View
    {
        return view('admsdmHome');
    }
}