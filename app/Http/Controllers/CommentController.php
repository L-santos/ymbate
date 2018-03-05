<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Thread;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function store(Request $request, Thread $thread)
    {

        $validateDate = $request->validate([
            'text' => 'required|min:1'
        ]);
        
         Comment::create([
             'text' => $request->text,
             'user_id' => auth()->user()->id,
             'thread_id' => $thread->id,
         ]);

         return back();
    }


    public function remove(Request $request)
    {
        
        return;
    }

}
