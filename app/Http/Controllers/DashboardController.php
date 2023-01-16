<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'datas' => Booking::whereDate('tanggal_masuk', Carbon::now())->orderBy('nama')->paginate(15),
            'hari_ini' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'masuk')->count(),
            'permintaan' => Booking::where('status', 'pending')->count(),
            'pendaki_naik' => Booking::where('status', 'masuk')->count(),
            'riwayat' => Booking::where('status', 'keluar')->count(),
        ]);
    }
}
