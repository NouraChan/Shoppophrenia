<?php

namespace App\Http\Controllers;
use App\DTO\ReviewDTO;
use App\Http\Requests\CreateReviewRequest;
use App\Repository\Interface\IReviewRepository;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewRepository;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = $this->reviewRepository->getAll();

        return view('admindashboard.reviews.index', ['reviews' => $reviews]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function __construct(IReviewRepository $reviewRepository){
        // $this->middleware('auth');
        $this->reviewRepository = $reviewRepository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateReviewRequest $createReviewRequest)
    {
       
        $review = ReviewDTO::handleData($createReviewRequest);
        $this->reviewRepository->createObject($review);
        
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
        
    //     $review = $this->reviewRepository->getObject($id);
    //     return view('admindashboard.reviews.edit', ['review' => $review]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(CreateReviewRequest $createReviewRequest, string $id)
    // {
    //     $review = $this->reviewRepository->getObject($id);
    //     $reviewDTO = ReviewDTO::handleData($createReviewRequest);
    //     $updated = $this->reviewRepository->updateObject($review, $reviewDTO);
        

    //     return redirect()->back();    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = $this->reviewRepository->getObject($id);
        $review->delete();
        return redirect()->back();
}}
