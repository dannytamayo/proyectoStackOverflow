<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //

    public function index(){

        $tags = Tag::paginate(8);

        return view('tags.index', compact('tags'));

    }

    public function show(Tag $tag){

        return view('tags.show', compact('tag'));
    }
}
