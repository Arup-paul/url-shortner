<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $urls = Url::query()->latest()->paginate(5);
        return view('welcome',compact('urls'));
    }
}
