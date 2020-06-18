<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Application;
use App\Produit;
use App\User;
use Image;

class productController extends Controller
{
	 protected function validator(array $data)
    {
        return Validator::make($data, [  
            'name' => ['required', 'string', 'max:255'],
            'prix' => ['required'],
            'file' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'], 
           
        ]);
    } 
    public function add_product(Request $request)
    {
       if($request->isMethod('post'))
     {
     	 $this->validator($request->all())->validate();
     	 $id = Auth::user()->id;
         $AppInfo = Application::find($id);
         $application_id = $AppInfo->id;
         $avatar = $request->file('file');
         $fileName = time().'.'.$avatar->getClientOriginalExtension();
         Image::make($avatar)->resize(300,300)->save(public_path('/upload/' .$fileName));
         $produit = new Produit();
         $produit->name = Input::get('name');
         $produit->prix = Input::get('prix');
         $produit->image = $fileName;
         $produit->application_id = $application_id;
         $produit->save();
         $AppInfo->status = "1";
         $AppInfo->save();
         return view('configNote');
      }else{
     	
         return view('configProduit');
         
     	
     }
    }
    public function delete(int $id = null, Request $request)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->back();
    }
    public function addproduct (Request $request)
    {
         if($request->isMethod('post'))
     {
         $this->validator($request->all())->validate();
         $id = Auth::user()->id;
         $AppInfo = Application::find($id);
         $application_id = $AppInfo->id;
         $avatar = $request->file('file');
         $fileName = time().'.'.$avatar->getClientOriginalExtension();
         Image::make($avatar)->resize(300,300)->save(public_path('/upload/' .$fileName));
         $produit = new Produit();
         $produit->name = Input::get('name');
         $produit->prix = Input::get('prix');
         $produit->image = $fileName;
         $produit->application_id = $application_id;
         $produit->save();
         $AppInfo->status = "1";
         $AppInfo->save();
         return redirect()->action('configController@info');
      }else{
        
         return view('configProduit');
         
        
     }
    }

    public function index(Request $request)
    {
         if($request->isMethod('post'))
         {

         }else
         { 
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

             
        return view('produit', $InfoAppTab, $themeInfoTab);
        }else{
             return view('produit', $InfoUserTab);
        }
        }else{
          return redirect()->action('HomeController@index');
        }
        
     }
   }
}
