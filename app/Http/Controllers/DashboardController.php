<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (request("status")) {
            $datas = Booking::where('status', request("status"))->whereDate('tanggal_masuk', Carbon::now())->orderBy('nama')->paginate(15);
        } elseif (request("nama")) {
            $datas = Booking::where('nama', 'like', '%' . request('nama') . '%')->whereDate('tanggal_masuk', Carbon::now())->orderBy('nama')->paginate(15);
        } else {
            $datas = Booking::whereDate('tanggal_masuk', Carbon::now())->orderBy('nama')->paginate(15);
        }
        return view('dashboard', [
            'datas' => $datas,
            'hari_ini' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'belum masuk')->count(),
            'permintaan' => Booking::where('status', 'belum masuk')->count(),
            'pendaki_naik' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'sudah masuk')->count(),
            'riwayat' => Booking::where('status', 'sudah masuk')->count(),
        ]);
    }
}
