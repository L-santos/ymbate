<?php

namespace App\Http\Controllers;

use App\Page;
use App\User;   
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('thread.list', ['pages' => $pages]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'slug' => 'alpha_dash|required|max:25|unique:pages,id',
                'title' => 'string|required|max:255',
                'description' => 'string|nullable|max:255',
                'type' => 'required|exists:types,id'
            ]
        );   

        $page = new Page();
        $page->id = $request->slug;
        $page->title = $request->title;
        $page->type_id = $request->type;
        $page->description = $request->description;
        $page->save();
        
        $page->users()->attach(auth()->user(), ['roles' => '["admin"]']);
        $page->update();

        return redirect()->route('page.show', ['page' => $page]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Page $page)
    {  
        //Subscribe to a page
        if($request->isMethod('post'))
        {
            $user = auth()->user();
            if($page->users->contains($user))
            {
                $page->users()->detach($user);
            }else{
                $page->users()->attach($user, ['roles' => '["view"]' ]);
            }
        }

        return view('page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }
}
