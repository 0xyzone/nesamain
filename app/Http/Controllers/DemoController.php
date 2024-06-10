<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        $news = News::all();
        return view("demo", compact("news"));
    }

    public function show(News $id) {
        $news = $id;
        return view("demoshow", compact("news"));
    }
}
