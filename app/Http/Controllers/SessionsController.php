<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    
    public function index(){

    	return $this->render('auth.login');
    }

    public function store(Request $request){

    	$this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')], $request->get('remember'))):
            return redirect()->route('manager_list');
        elseif (Auth::attempt(['email' => $request->get('username'), 'password' => $request->get('password')], $request->get('remember'))):
            return redirect()->route('manager_list');
        else:
            $this->setFlash('danger', 'Invalid credentials');
        endif;
        return redirect()->route('login');
    }

    public function distroy(){
    	Auth::logout();

    	$this->setFlash('success','You have been logged out.');

    	return redirect()->route('login');
    }
}
