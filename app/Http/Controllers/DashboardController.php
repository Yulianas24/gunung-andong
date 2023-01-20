<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $yesterday = Carbon::yesterday();

        Booking::where('tanggal_masuk', '<=', $yesterday)->where('status', 'belum masuk')->update(['status' => 'batal naik']);

        return view('dashboard', [
            'hari_ini' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'belum masuk')->count(),
            'permintaan' => Booking::where('status', 'belum masuk')->count(),
            'pendaki_naik' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'sudah masuk')->count(),
            'riwayat' => Booking::where('status', 'sudah masuk')->count(),
        ]);
    }
}
