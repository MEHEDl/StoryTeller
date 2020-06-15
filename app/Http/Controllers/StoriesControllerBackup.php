<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class StoriesController extends Controller
{
    //
    public function index(){
        $stories = Story::where('user_id',auth()->user()->id)
            ->orderBy('id','DESC')
            ->paginate(3);
        //->get();
        //dd(auth()->user()->id);
        //dd($stories);
        return view('stories.index',[
            'stories' => $stories
        ]);
    }
    public function show(Story $story){     //route model binding
        //dd($id);
        //$story = Story::findOrFail($id);
        //dd($story);
        return view('stories.show',[
            'story' => $story
        ]);
    }
}
