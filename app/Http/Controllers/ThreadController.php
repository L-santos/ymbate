<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Page;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::take(100)->paginate(10);

        return view('index', ['threads' =>  $threads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        return view('thread.create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'page' => 'required|exists:pages,id',
            'title' => 'required|max:120',
            'text' => 'nullable',
        ]);

        $thread = Thread::create([
            'title' => $request->title,
            'text' => $request->text,
            'page_id' => $request->page,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('thread.show', ['page' => $thread->page, 'thread' => $thread]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page , Thread $thread)
    {
        return $thread->page == $page? view('thread.show', ['thread' => $thread]) : abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
