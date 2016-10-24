<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest; 
use Mail; 
use Redirect; 

class PagesController extends Controller
{
    //
    
 

    public function about(){

        return view('pages/about'); 
    }



    public function create(){
     return view('pages.contact'); 
    }



    public function store(ContactFormRequest $request){

        Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('lucien.jarrett@gmail.com');
        $message->to('ljarrett@coolcorp.com', 'Admin')->subject('Park.Me Feedback');
    });


        return Redirect::route('contact')
        ->with('message', 'Thanks for contacting us!!'); 

    }

    

}