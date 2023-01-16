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
            'hari_ini' => Booking::whereDate('tanggal', Carbon::now())->where('status', 'masuk')->count(),
            'permintaan' => Booking::where('status', 'pending')->count(),
            'pendaki_naik' => Booking::where('status', 'masuk')->count(),
            'riwayat' => Booking::where('status', 'keluar')->count(),
        ]);
    }
}
