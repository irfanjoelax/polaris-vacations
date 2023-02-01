<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Paket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookNowController extends Controller
{
    public function index($slug)
    {
        return view('pages.book-now', [
            'paket' => Paket::with('category')->where('slug', $slug)->first()
        ]);
    }

    public function create(Request $request)
    {
        Booking::create([
            'paket_id'    => $request->paket_id,
            'name'        => $request->name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'type'        => $request->type,
            'name_travel' => $request->name_travel,
            'message'     => $request->message,
        ]);

        Alert::success('Success', 'Booking has been Sent and processing');

        return redirect()->back();
    }
}
