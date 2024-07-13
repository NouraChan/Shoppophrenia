<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Repository\Interface\IAnnouncementRepository;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();

        return view('admindashboard.announcements.index', ['announcements' => $announcements]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function __construct(IAnnouncementRepository $announcementRepository){
        $this->announcementRepository = $announcementRepository;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        return redirect()->route('announcement.index');

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
        return view('admindashboard.announcements.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        return redirect()->back();    }
}
