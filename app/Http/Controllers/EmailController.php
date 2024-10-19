<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
	public static function mailToUser($data,$subject,$template){
			
		Mail::send($template,['data' => $data[0],'subject'=>$subject], function($message) use($subject){
		
				$message->from('salma11042208@outlook.com', '123Moving NoReply');
				$message->subject($subject);
				$message->to('salma@c2native.io');
		});
 }
}
