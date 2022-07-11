<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Mycontroller2;
use Illuminate\Support\Facades\URL;
class myController extends Controller
{
     public function index()
     {
       return view('contact');
      
       //error controll  
      // abort(429);
     }
     public function about()
     {
        return view('about');
     }

    
    //  public function StudentStore(Request $request)
    //  {
    //   if(isset($_POST['submit'])){
    //     if($_POST['name']!='' && $_POST['email']!=''){
    //       return redirect('/');
    //     }else{
    //       return redirect('contact');
    //     }
    //   }

    //  }
    public function StudentStore(Request $request)
    {

     // return redirect()->route('about.us');

    //  return redirect()->action([Mycontroller2::class, 'test']);


   //__ Redirecting With Flashed Session Data __//
   //  return redirect("contact")->with('session', "file downloaded successfull");

   //__validetion__//

   $validatedData = $request->validate([
      'first-name' => ['required','max:80'],
      'last-name' => ['required','max:30'],
      'email'=>['required','unique:users','max:100'],
      'number'=>['required','unique:users-phone','max:14'],
      'password'=>['required','min:8','max:12'],

  ]);
 

    //__ Redirecting To External Domains __// 
    // return redirect()->away('https://web.programming-hero.com/');
    }
}
