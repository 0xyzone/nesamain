<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about() {
        return view("about");
    }
    public function certificates() {
        return view("certificates");
    }
    public function contact() {
        return view("contact");
    }
    public function events() {
        return view("events");
    }
    public function news() {
        $news = News::orderBy("id","desc")->where('status', 'published')->paginate(10);
        return view("news");
    }
}
