<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Include Storage Library
use Illuminate\Support\Facades\Storage;
// Bring in the models from Post.php
use App\Review;
use App\User;
use App\Professor;

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
    public function create($id)
    {
        $professor = Professor::find($id);
        $professors = Professor::get();
        return view('reviews.create')->with('professor', $professor)->with('professors', $professors);
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
            'quality_score' => 'required',
            'personality_score' => 'required',
            'professionalism_score' => 'required',
        ]);

        // Create Review
        $review = new Review;
        $quality_score = $request->input('quality_score');
        $personality_score = $request->input('personality_score');
        $professionalism_score = $request->input('professionalism_score');
        $qualityScore = $request->input('qualityScore');
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->quality_score = $quality_score;
        $review->personality_score = $personality_score;
        $review->professionalism_score = $professionalism_score;
        $review->user_id = auth()->user()->id;
        $review->overall_score = ($quality_score + $personality_score + $professionalism_score) / 3;
        $review->professor_id = $request->input('professor_id');
        $review->save();
        $id = $review->professor_id;

        // Find the average scores for the professor
        $professor = Professor::find($id);
        $reviews = Review::get();
        $aveScore = $professionalismScore = $qualityScore = $overallScore = $personalityScore = null;

        // Custom function to find average scores
        function averageScores($score, $referenced, $id) {
            $count = 0;
            $professor = Professor::find($id);
            $reviews = Review::get();
            foreach ($reviews as $review) {
                if ($review->professor_id == $professor->id) {
                    $score += $review->$referenced;
                    $count += 1;
                }
            }
            if ($score > 0) {
                $score = $score / $count;
                return $score;
            } 
            return;
        }
        
        $overallScore = round(averageScores($overallScore,'overall_score', $id), 1);
        $personalityScore = round(averageScores($personalityScore,'personality_score', $id), 1);
        $professionalismScore = round(averageScores($professionalismScore,'professionalism_score', $id), 1);
        $qualityScore = round(averageScores($qualityScore,'quality_score', $id), 1);
        
        return view('professors.show')
        ->with('professor', $professor)
        ->with('reviews', $reviews)
        ->with('overallScore', $overallScore)
        ->with('personalityScore', $personalityScore)
        ->with('professionalismScore', $professionalismScore)
        ->with('qualityScore', $qualityScore)
        ->with('successMsg', 'review created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $reviews = Review::get();
        $review = DB::table('reviews')->where('id', $id);


        $review->delete();

        return redirect('/autocomplete')
        ->with('error', 'Review Deleted')
        ->with('user', $user)
        ->with('reviews', $reviews);
        // $user_id = Auth()->user()->id;
        // $user = User::find($user_id);
        // $review = Review::find($id);
        // $reviews = Review::get();

        // // Check for correct user
        // if(auth()->user()->id != $review->user_id) {
        //     return view('reviews.myReviews')
        //     ->with('errorMsg', 'Unauthorized Page')
        //     ->with('user', $user)
        //     ->with('reviews', $reviews);
        // }

        // return view('reviews.show')
        // ->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $review = Review::find($id);
        $reviews = Review::get();
        $professor = Professor::find($review->professor_id);

        // Check for correct user
        if(auth()->user()->id != $review->user_id) {
            return view('reviews.myReviews')
            ->with('errorMsg', 'Unauthorized Page')
            ->with('user', $user)
            ->with('reviews', $reviews);
        }

        return view('reviews.edit')
        ->with('review', $review)
        ->with('professor', $professor);
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
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $review = Review::find($id);
        $reviews = Review::get();
        $professor = Professor::find($review->professor_id);
         // return view ('reviews.create');
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'quality_score' => 'required',
            'personality_score' => 'required',
            'professionalism_score' => 'required',
        ]);

        // Create Review
        $quality_score = $request->input('quality_score');
        $personality_score = $request->input('personality_score');
        $professionalism_score = $request->input('professionalism_score');
        $qualityScore = $request->input('qualityScore');
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->quality_score = $quality_score;
        $review->personality_score = $personality_score;
        $review->professionalism_score = $professionalism_score;
        $review->user_id = auth()->user()->id;
        $review->overall_score = ($quality_score + $personality_score + $professionalism_score) / 3;
        $review->professor_id = $request->input('professor_id');
        $review->save();
        $id = $review->professor_id;

        return view('pages.index')
        ->with('user', $user)
        ->with('reviews', $reviews)
        ->with('successMsg', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $reviews = Review::get();
        $review = DB::table('reviews')->where('id', $id);


        $review->delete();

        return redirect('/')
        ->with('error', 'Review Deleted')
        ->with('user', $user)
        ->with('reviews', $reviews);
    }
}
