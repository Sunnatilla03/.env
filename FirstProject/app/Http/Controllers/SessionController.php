<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        //session value
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo 'No data in the session';
        }
    }
    //let's create another function here for storing session data
    public function storeSessionData(Request $request)
        {
            $request->session()->put('name','Zafar');
            echo 'Data has been added to the session';
        }
    public function deleteSessionData(Request $request)
        {
            $request->session()->forget('name');
            echo 'Data has been removed from the session';
        }
}
