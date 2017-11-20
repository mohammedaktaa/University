<?php

namespace App\Http\ViewComposers;

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/31/2016
 * Time: 10:33 PM
 */
use Illuminate\Contracts\View\View;
use LaravelLocalization;
use Modules\General\Entities\MenuItem;

class AdminHeaderComposer
{
    public function compose(View $view)
    {
       $menuItems=MenuItem::orderBy('order')->with(['parent','children'])->orderBy('is_root')->orderBy('order')->get();
//       dump($menuItems[0]->order);
        $view->with(compact('menuItems'));
    }
}