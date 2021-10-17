<?php

namespace App\Http\Controllers\admin;

use App\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function savecomments(Request $request){
        $dataComments = $request->all();
        Comments::Create([
            'name' => $dataComments['name'],
            'email' => $dataComments['email'],
            'message' => $dataComments['message'],
        ]);
        $this->mail($dataComments);
        return back();
    }

    public function mail($data){
        Mail::send('emails.welcome', compact('data'), function ($message) use ($data){
            $message->from('test@i.ua');
            $message->to($data['email']);
            $message->subject('Hello');
        });
    }
}
