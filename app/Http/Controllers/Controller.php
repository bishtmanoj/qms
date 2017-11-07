<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [
    	'pageTitle' => 'Quarter Management System'
    ];

    protected function render($view){

    	return view($view,$this->data);

    }

    protected function setFlash($alert='', $flash = '',$icon =''){
    	
    	request()->session()->flash('response', [
    		'alert' => $alert,
    		'flash' => $flash,
    		'icon' => $icon
    	]);
    }
}
