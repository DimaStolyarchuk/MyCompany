<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function saveorders(Request $request){
        $dataOrders = $request->all();
        Order::Create([
            'name' => $dataOrders['name'],
            'email' => $dataOrders['email'],
            'tel' => $dataOrders['tel'],
            'subject' => $dataOrders['subject'],
            'message' => $dataOrders['message'],
        ]);
        $this->mail($dataOrders);
        return back();
    }

    public function mail($data){
        Mail::send('emails.order', compact('data'), function ($message) use ($data){
            $message->from('test2@i.ua');
            $message->to($data['email']);
            $message->subject('Hello');
        });
    }
}
