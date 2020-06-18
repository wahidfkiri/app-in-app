<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Note;
use App\Produit;

class applicationController extends Controller
{
     public function suppression(int $id = null, Request $request)
   {
     $application = Application::find($id);
     $application -> delete();
     return redirect()
     ->back();
   }
}
