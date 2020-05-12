<?php

namespace App\Providers;

use App\Channel;
use App\Http\View\ChannelsComposers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        option 1:
//        View::share('channels',Channel::orderBy('name')->get());
// For evary signgle view



//        option 2 with wildcard
//        View::composer(['post.*','channel.index'],function($view){
//            $view->with('channels',Channel::orderBy('name','desc')->get());
//        });


//        option3 use a dedicated composer class
//        it should be created in http/View/ChannelsComposers/ should have a composer method and shoould accept illuniate/view/view

        View::Composer(['post.*','channel.index'],ChannelsComposers::class);
    }
}
