<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Image;
use Storage;

class NewsController extends Controller
{
    public function index(){
    	$news = News::all();
    	return view('admin.news.list',['news' => $news]);
    }
}
