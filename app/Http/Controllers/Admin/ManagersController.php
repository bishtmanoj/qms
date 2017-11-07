<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ManagersController extends Controller
{
    
    public function index(){

        $this->data['pageTitle'] = 'Managers';
        $this->data['managers'] = User::managers()->paginate(15);

    	return $this->render('admin.managers.list');

    }

    public function create(){

    	return $this->render('admin.managers.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'username' => 'required|alpha_dash|unique:users,username',
    		'password' => 'required|confirmed',
    		'password_confirmation' => 'required'
    	]);

    	

    	User::create([
    		'role_id' => User::MANAGER_ROLE,
    		'username' => $request->get('username'),
    		'password' => bcrypt($request->get('password'))
    	]);

    	$this->setFlash('success','New Manager added successfully.');
    	return redirect()->route('manager_list');

    }
}
