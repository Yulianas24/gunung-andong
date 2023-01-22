<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $yesterday = Carbon::yesterday();

        Booking::where('tanggal_masuk', '<=', $yesterday)->where('status', 'belum masuk')->update(['status' => 'batal naik']);

        return view('dashboard');
    }

    public function admin(){
        return view('admin', [
            'daftarAdmin' => User::latest()->paginate(10),
        ]);
    }

    public function destroy($id){
        User::where('id', $id)->delete();
        return back();
    }

}
