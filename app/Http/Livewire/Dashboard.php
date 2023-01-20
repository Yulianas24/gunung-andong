<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;

class Dashboard extends Component
{

    public function render(){
        return view('livewire.dashboard',[
            'datas'=>Booking::whereDate('tanggal_masuk', Carbon::now())->orderBy('nama')->paginate(10),
        ]);
    }

}
