<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;


class SubscribeController extends Controller
{
    public function store(Request $request)
    {

        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribe($request->email);
            return back()->with('success', 'Thanks For Subscribe');
        }
        return back()->with('failure', 'Sorry! You have already subscribed ');

    }
}
