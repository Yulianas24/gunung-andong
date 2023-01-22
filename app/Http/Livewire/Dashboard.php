<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;



class Dashboard extends Component
{
    use WithPagination;

    public $nama;
    public $status;
    public $modal;
    public function status($status){
        $this->status = $status;
    }


    public function render(){
        $datas = Booking::whereDate('tanggal_masuk', Carbon::now())
        ->where('nama', 'like', '%' . $this->nama . '%')
        ->where('status', 'like', '%' . $this->status . '%')
        ->orderBy('nama')->paginate(10);
        return view('livewire.dashboard',[
            'datas'=> $datas,
            'hari_ini' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'belum masuk')->count(),
            'permintaan' => Booking::where('status', 'belum masuk')->count(),
            'pendaki_naik' => Booking::whereDate('tanggal_masuk', Carbon::now())->where('status', 'sudah masuk')->count(),
            'riwayat' => Booking::where('status', 'sudah masuk')->count(),
        ]);
    }

    public function terima($id)
    {
        Booking::where('id', $id)->update(['status' => 'sudah masuk']);
    }

    public function pending($id)
    {
        Booking::where('id', $id)->update(['status' => 'belum masuk']);

    }

}
