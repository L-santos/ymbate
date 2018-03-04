<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class UserController extends Controller
{
    /**
     * Display user's subscriptions
     * 
     * @return \Illuminate\Http\Response
     */
    public function pages()
    {
        $user = auth()->user();
        $pages = $user->pages()->get();

        return view('page.list', ['pages' => $pages]);
    }

}
