<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class FormResultController extends Controller
{
    
	public function submitcontact(Request $request)
	{
		try {
			$validatedData = $request->validate([
				'fullname' => 'required|max:255',
				'email' => 'required|email',
				'phone' => 'required',
        'subject' => 'required',
				'message' => 'nullable'				
			]);
			$contactForm = ContactForm::create($validatedData);
			// $data,$subject,$template
			// EmailController::mailToUser(
			// 	[$validatedData],
			// 	"New Contact Form Submitted",
			// 	"mail.mailhtml"
			// );

			return redirect()->action('FormResultController@thankyou');
		} catch (\Exception $e) {
			return redirect()->action('FormResultController@error', $e->getMessage());
		}
	}

	
	public function thankyou()
	{
		return view('website.components.thank-you');
	}
	public function error($error)
	{
		return view('website.components.error',  compact('error'));
	}
}
