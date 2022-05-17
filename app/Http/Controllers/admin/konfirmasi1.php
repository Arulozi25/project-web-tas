<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\products;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class konfirmasi extends Component
{
    public $pesanans;

    public function edit($id)
    {
        $pesanans = pesanan::findOrFail($id);
        $this->z = $id;
        $this->kode_pemesanan = $pesanans->kode_pemesanan;
        $this->status = $pesanans->status;
        $this->total_harga = $pesanans->total_harga;
        $this->kdoe_unik = $pesanans->kode_unik;
        $this->user_id = $pesanans->user_id;
    }
}
