<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Jackiedo\Cart\Facades\Cart;
use App\Repository\AnnouncementRepository;
use Illuminate\Http\Request;
use App\Repository\Interface\IAnnouncementRepository;
use App\DTO\AnnouncementDTO;
use App\Http\Requests\CreateAnnouncementRequest;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\ICartRepository;

class AnnouncementController extends Controller
{

    protected $announcementRepository;
    protected $cartRepository;
    protected $productRepository;

    public function __construct(IAnnouncementRepository $announcementRepository , ICartRepository $cartRepository, IProductRepository $productRepository)
    {
        $this->announcementRepository = $announcementRepository;
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }



    public function toAnnouncements()
    {

        $announcements = $this->announcementRepository->getAll();
        $products = $this->productRepository->getAll();
        $cart = $this->cartRepository->insertCart($products);

        return view('announcements', $cart, ['announcements' => $announcements]);
    }







    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = $this->announcementRepository->getAll();

        return view('admindashboard.announcements.index', ['announcements' => $announcements]);

    }

    /**
     * Show the form for creating a new resource.
     */

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
    public function store(CreateAnnouncementRequest $createAnnouncementRequest)
    {

        $announcement = AnnouncementDTO::handleData($createAnnouncementRequest);
        $this->announcementRepository->createObject($announcement);


        return redirect()->route('Announcement.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $announcement = $this->announcementRepository->getObject($id);
        $products = $this->productRepository->getAll();
        $cart = $this->cartRepository->insertCart($products);

       
        return view('announcement.show', $cart , ['announcement' => $announcement] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $announcement = $this->announcementRepository->getObject($id);
        return view('admindashboard.announcements.edit', ['announcement' => $announcement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateAnnouncementRequest $createAnnouncementRequest, string $id)
    {
        $announcement = $this->announcementRepository->getObject($id);
        $announcementDTO = AnnouncementDTO::handleData($createAnnouncementRequest);
        $updated = $this->announcementRepository->updateObject($announcement, $announcementDTO);


        return redirect()->route('Announcement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $announcement = $this->announcementRepository->getObject($id);
        $announcement->delete();
        return redirect()->back();
    }
}
