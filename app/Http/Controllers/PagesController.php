<?php

namespace App\Http\Controllers;
use App\User;
use App\Review;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        if (Auth()->user()){
            $user_id = Auth()->user()->id;
            $user = User::find($user_id);
            // return view('pages.index', compact('title'));
            return view('pages.index')->with('name', $user->name);
        } else {
            return view('pages.index');
        }
    }
}
