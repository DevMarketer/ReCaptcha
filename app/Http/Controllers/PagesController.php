<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getForm() {
    	return view('form');
    }

    public function postForm(Request $request) {
    	$name = $request->name;
    	$gender = $request->gender;

    	$token = $request->input('g-recaptcha-response');

    	if ($token) {
    		# we know it was submitted
    		return view('name')->withName($name)->withGender($gender);
    	} else {
    		return redirect('/');
    	}

    	
    }
}
