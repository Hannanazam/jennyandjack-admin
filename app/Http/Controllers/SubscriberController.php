<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function Subscriber()
    {

            $title = "Subscribers";
            $subscribers = Subscriber::orderBy('id','DESC')->get();
            return view('admin.subscriber', compact("subscribers","title"));

    }
}
