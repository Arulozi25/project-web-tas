<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\products;

class UploadFile extends Component
{
    use WithFileUploads;
    public $products, $nama, $harga, $harga_nameset, $liga_id, $is_ready, $jenis, $berat, $gambar, $products_id;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store()
    {
        $dataValid = $this->validate([
            'nama' => 'required',
            'harga' => 'required',
            'liga_id' => 'required',
            'is_ready' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'gambar' => 'required',
        ]);
  
  
        products::create($this);
  
        session()->flash('message', 'File uploaded.');
    }

    public function render()
    {
        return view('livewire.upload-file');
    }
}