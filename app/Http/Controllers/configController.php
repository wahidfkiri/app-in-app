<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Image;
use App\Application;
use App\User;
use App\Categorie;
use App\Theme;
use App\Produit;
class configController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
     protected function validator(array $data)
    {
        return Validator::make($data, [  
            'name' => ['required', 'string', 'max:255'],
            'categorie' => ['required'],
            'file' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'], 
           
        ]);
    } 
   public function config(Request $request)
   {
    $id = Auth::user()->id;
    $UserInformation = User::find($id);
    $InfoUserTab = array('InfoUser' => $UserInformation );
    $App = Application::find($id);
    if ($App) {
     return redirect()->back();
    }else{
    return view('configApp', $InfoUserTab);  
    }
   }
   public function application(Request $request)
   {
    if($request->isMethod('post'))
    { 
        $this->validator($request->all())->validate();
        $id_user = Auth::user()->id;
        $application = new Application();
        $application->name = Input::get('name');
        // $application->categorie = Input::get('categorie');
        $avatar = $request->file('file');
        $fileName = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(500,500)->save(public_path('/upload/' .$fileName));
        $application->logo = $fileName;
        $application->user_id =$id_user;
        if (Input::get('categorie') === "Gestion de stock") {
         $categorie_id = 1;
         $application->categorie_id = $categorie_id;
        }else{
          $categorie_id = 2;
           $application->categorie_id = $categorie_id;
        }
        if ( Input::get('normal') )
        {
        $application->theme_id = 1;
        }else if (Input::get('premium')) 
        {
          $application->theme_id = 2;
        }
        $application->save();
     return redirect()->action('productController@add_product');
       }else{
        return view('configProduit');
       }
   }
   public function Info (Request $request)
   {
     if($request->isMethod('post'))
     {

     }else{
      $id = Auth::user()->id;
        $UserInformation = User::find($id);
        $InfoUserTab = array('InfoUser' => $UserInformation );
        $AppInformation = User::with('application')->find($id);//must find id application but it return id user
        if ($AppInformation->application->count() > 0) {
        $InfoAppTab = array('Info' => $AppInformation);
        foreach ($AppInformation->application as $get)
        {
          $idapp = $get->id;
        }

        $ThemeInfo = Application::with('theme','produit','note')->find($idapp);
        $themeInfoTab = array('InfoTheme' => $ThemeInfo);
        if ($AppInformation) {

             
        return view('configInfo', $InfoAppTab, $themeInfoTab);
        }else{
             return view('configInfo', $InfoUserTab);
        }
        }else{
          return redirect()->action('HomeController@index');
        }
        
     }
   }
}
