<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function add_contact_detail(Request $request){
        // Validation 
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'organization_name' => 'required',
            'email' => 'required|email',
            'services' => 'required',
            'message' => 'required',
        ]);
        // Return the message
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' =>$validator->errors(),
            ]);
        }
        try {
            //code...
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'organization_name' => $request->organization_name,
                'services' => $request->services,
                'content' => $request->message,
            ];
            if(config('global.APP_ENV')=='local'){
                \Mail::send('emails.contact', $data, function ($message)use($request) {
                    $message->from($request->email, $request->first_name.' '.$request->last_name);
                    $message->to(config('global.email.to'))->subject(config('global.email.subject'));
                });
            }else{
                $html = view('emails.contact', $data)->render();
                $to = config('global.email.to');
                $subject = config('global.email.subject');

                $message = $html;

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <'.$request->email.'>' . "\r\n";
                mail($to,$subject,$message,$headers);
            }
            return response()->json(['success'=>true,'msg'=>'Message Send Successfully']);
        }catch(\Exception $e){
            \Log::error('contact Controller Message: ' . $e->getMessage()." Line Number : ".$e->getLine());
            return ['success' =>false,'msg' => $e->getMessage()." ".$e->getLine()];
        }
    }
}
