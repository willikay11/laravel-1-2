<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    public function send(Request $request){
        $title = "Email Activation";
        $content = "Click on the link below to activate account";

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('willikay11@gmail.com', 'Willie');

            $message->to('wkamuyu@cytonn.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}
