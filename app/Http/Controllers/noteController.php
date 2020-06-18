<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Note;
use App\Application;

class noteController extends Controller
{
	 protected function validator(array $data)
    {
        return Validator::make($data, [  
            'title' => ['required', 'string', 'max:255'],
            'sujet' => ['required', 'string', 'max:255'],
            'dateJour' => ['required'],
             'timeDebut' => ['required'], 
           
        ]);
    } 
    public function add_newNote(Request $request)
    {
    	 if($request->isMethod('post'))
     {
      $this->validator($request->all())->validate();
        $id_user = Auth::user()->id;
        $App = Application::find($id_user);
        $id_app = $App->id;
        $note = new Note();
        $note->title = Input::get('title');
        $note->sujet = Input::get('sujet');
        $note->dateJour = Input::get('dateJour');
        $note->timeDebut = Input::get('timeDebut');
        $note->application_id = $id_app;
        $note->save();
        return redirect()->action('configController@info');
     }else{
     
        	return view('configNote');
       }
    }
    public function delete(Request $request, int $id = null)
    {
       $note = Note::find($id);
       $note->delete();
       return redirect()->back();
    }
}
