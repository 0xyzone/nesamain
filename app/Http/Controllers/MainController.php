<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about() {
        $titleName = "About";
        return view("about", compact('titleName'));
    }
    public function certificates() {
        $titleName = "Certificates";
        return view("certificates", compact('titleName'));
    }
    public function contact() {
        $titleName = "Contact";
        return view("contact", compact('titleName'));
    }
    public function events() {
        $titleName = "Events";
        return view("events", compact('titleName'));
    }
    public function news() {
        $news = News::orderBy("id","desc")->where('status', 'published')->paginate(10);
        $titleName = "News";
        return view("news", compact('titleName'));
    }
}
