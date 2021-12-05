<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $menu = Menu::current()->with(['days', 'days.lunch', 'days.dinner'])->first();
        return view('menu.index', compact('menu'));
    }
}
