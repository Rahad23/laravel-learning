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
    return redirect("/")->with('session', "file downloaded successfull");

    //__ Redirecting To External Domains __// 
    // return redirect()->away('https://web.programming-hero.com/');
    }
}
