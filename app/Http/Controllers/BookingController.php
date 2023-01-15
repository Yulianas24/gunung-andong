<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use GrahamCampbell\ResultType\Success;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $mytime = Carbon::now();
        if (request('sort') == 'today') {
            $datas = Booking::whereDate('created_at', $mytime)->latest()->get();
        } elseif (request('date')) {
            $datas = Booking::whereDate('created_at', request('date'))->latest()->get();
        } elseif (request('nama')) {
            $search = '%' . request('nama') . '%';
            $datas = Booking::where('nama', 'like', $search)->latest()->get();
        } elseif (request('status')) {
            $datas = Booking::where('status', 'like', request('status'))->latest()->get();
        } else {
            $datas = Booking::latest()->get();
        }
        return view('data', [
            'datas' => $datas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = new Booking();
        $booking->nama = $request->nama;
        $booking->alamat = $request->alamat;
        $booking->ktp = $request->ktp;
        $booking->telepon = $request->telepon;
        $booking->jenis_kelamin = $request->jenis_kelamin;
        $booking->status = 'pending';
        $booking->save();
        return redirect('/')->with("success", "Booking Success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */

    public function terima($id)
    {

        Booking::where('id', $id)->update(['status' => 'diterima']);

        return back();
    }
    public function tolak($id)
    {
        Booking::where('id', $id)->update(['status' => 'ditolak']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id', $id)->delete();
        return back();
    }
}
