<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index(){
//        $channels =Channel::orderBy('name')->get();
//        for each time we need to create a
        return view('channel.index');
    }
}
