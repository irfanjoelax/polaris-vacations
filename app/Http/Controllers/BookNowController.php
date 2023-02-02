<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $data = [
            'paket_id'    => $request->paket_id,
            'name'        => $request->name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'type'        => $request->type,
            'name_travel' => $request->name_travel,
            'message'     => $request->message,
        ];

        Booking::create($data);

        Mail::to('iskandardinata081205@gmail.com')->send(new BookingMail($data));
        // Mail::to('irfanthejoelax@gmail.com')->send(new BookingMail($data));

        Alert::success('Success', 'Booking has been Sent and Processing');

        return redirect()->back();
    }
}
