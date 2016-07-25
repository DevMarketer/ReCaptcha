<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use Session;

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
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => array(
                    'secret'    => '6Lee2yUTAAAAAItblu0xor-VjlB8aVZquXhvXxHY',
                    'response'  => $token
                    )
                ]);
            $results = json_decode($response->getBody()->getContents());

            if ($results->success) {
                Session::flash('success', 'Yes we know you are human');
                return view('name')->withName($name)->withGender($gender);
            } else {
                Session::flash('error', 'You are probably a robot!');
                return redirect('/');
            }
    		# we know it was submitted
    	} else {
    		return redirect('/');
    	}

    	
    }
}
