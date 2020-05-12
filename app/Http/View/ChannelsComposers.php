<?php


namespace App\Http\View;


use App\Channel;
use Illuminate\View\View;

class ChannelsComposers
{
    public function compose(View $view){
        $view->with('channels',Channel::orderBy('name','desc')->get());
    }
}
