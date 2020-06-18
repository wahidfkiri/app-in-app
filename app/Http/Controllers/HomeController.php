<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Application;
use App\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $UserInformation = User::find($id);
        $InfoUserTab = array('InfoUser' => $UserInformation );
        $AppInfo = User::with('application')->find($id);
        $InfoAppTab = array('Info' => $AppInfo);
        if ($InfoAppTab){

        return view('home', $InfoAppTab);
        }else{
            echo $UserInformation;die;
             return view('home', $InfoUserTab);
        }
       
    }
}
