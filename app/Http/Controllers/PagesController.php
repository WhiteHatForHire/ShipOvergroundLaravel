<?php

namespace App\Http\Controllers;
use App\User;
use App\Review;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view ('pages.index');
    }
}
