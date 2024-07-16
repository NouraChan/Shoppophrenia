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
        $reviews = Review::all();

        return view('admindashboard.reviews.index', ['reviews' => $reviews]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function __construct(IReviewRepository $reviewRepository){
        $this->middleware('auth');
        $this->reviewRepository = $reviewRepository;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateReviewRequest $createReviewRequest)
    {
       
        $review = ReviewDTO::handleData($createReviewRequest);
        $this->reviewRepository->createObject($review);
        

        return redirect()->route('review.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $review = $this->reviewRepository->getObject($id);
        return view('admindashboard.reviews.edit', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateReviewRequest $createReviewRequest, string $id)
    {
        $review = $this->reviewRepository->getObject($id);
        $reviewDTO = ReviewDTO::handleData($createReviewRequest);
        $updated = $this->reviewRepository->updateObject($review, $reviewDTO);
        

        return redirect()->route('review.index');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = $this->reviewRepository->getObject($id);
        $review->delete();
        return redirect()->back();
}}
