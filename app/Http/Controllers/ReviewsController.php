<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Include Storage Library
use Illuminate\Support\Facades\Storage;
// Bring in the namespaces from Post.php
use App\Review;

// Optional DB library
use DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view ('reviews.index')->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view ('reviews.create');
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'qualityScore' => 'required',
            'personalityScore' => 'required',
            'professionalismScore' => 'required',
        ]);

        // Create Review
        $review = new Review;
        $qualityScore = $request->input('qualityScore');
        $personalityScore = $request->input('personalityScore');
        $professionalismScore = $request->input('professionalismScore');
        $qualityScore = $request->input('qualityScore');
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->qualityScore = $qualityScore;
        $review->personalityScore = $personalityScore;
        $review->professionalismScore = $professionalismScore;
        $review->user_id = auth()->user()->id;
        $review->overallScore = ($qualityScore + $personalityScore + $professionalismScore) / 3;
        // $review->user_id = auth()->user()->id;
        $review->save();

        return redirect('/reviews')->with('success', 'Review Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
