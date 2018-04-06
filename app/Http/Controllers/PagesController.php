<?php

namespace App\Http\Controllers;
use App\User;
use App\Review;
use App\Professor;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        if (Auth()->user()){
            $user_id = Auth()->user()->id;
            $user = User::find($user_id);
            $reviews = Review::get();
            return view('pages.index')->with('user', $user)
            ->with('reviews', $reviews);
        } else {
            return view('pages.index');
        }
    }

    public function autocomplete() {
        $professors = Professor::orderBy('last_name', 'desc')->get();
        return view('pages.autocomplete')->with('professors', $professors);
    }

}