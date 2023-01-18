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
        $yesterday = Carbon::yesterday();

        Booking::where('tanggal_masuk', '<=', $yesterday)->where('status', 'belum masuk')->update(['status' => 'batal naik']);


        if (request('sort') == 'today') {
            $datas = Booking::whereDate('tanggal_masuk', $mytime)->latest()->paginate(100);
        } elseif (request('date')) {
            $datas = Booking::whereDate('tanggal_masuk', request('date'))->latest()->paginate(100);
        } elseif (request('nama')) {
            $search = '%' . request('nama') . '%';
            $datas = Booking::where('nama', 'like', $search)->latest()->paginate(100);
        } elseif (request('status')) {
            $datas = Booking::where('status', request('status'))->latest()->paginate(100);
        } else {
            $datas = Booking::latest()->paginate(10);
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
        $booking->tanggal_masuk = $request->tanggal_masuk;
        $booking->tanggal_keluar = $request->tanggal_keluar;
        $booking->jenis_kelamin = $request->jenis_kelamin;
        $booking->status = 'belum masuk';
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

        Booking::where('id', $id)->update(['status' => 'sudah masuk']);

        return back();
    }
    public function tolak($id)
    {
        Booking::where('id', $id)->update(['status' => 'keluar']);
        return back();
    }
    public function pending($id)
    {
        Booking::where('id', $id)->update(['status' => 'belum masuk']);
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
