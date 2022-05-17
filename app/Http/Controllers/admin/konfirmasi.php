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
        $products = pesanan::findOrFail($id);
        $this->z = $id;
        $this->nama = $products->nama;
        $this->harga = $products->harga;
        $this->liga_id = $products->liga_id;
        $this->liga_id = $products->is_ready;
        $this->jenis = $products->jenis;
        $this->berat = $products->berat;
        $this->gambar = $products->gambar;
    }
}
