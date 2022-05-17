<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\products;
use Livewire\WithFileUploads;


class Crud extends Component
{
    use WithFileUploads;
    public $products, $nama, $harga, $harga_nameset, $liga_id, $is_ready, $jenis, $berat, $gambar, $products_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->products = products::all();
        return view('admin.crud');
    }

    public function create()
    {
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->nama = '';
        $this->harga = '';
        $this->harga_nameset = '';
        $this->liga_id = '';
        $this->is_ready = '';
        $this->jenis = '';
        $this->berat = '';
        $this->gambar = '';
    }
    
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'harga' => 'required',
            'liga_id' => 'required',
            'is_ready' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'gambar' => 'required',
        ]);

         $this->gambar->store('products', 'public');
    

        
        products::UpdateOrCreate(['id' => $this->products_id], [
            'nama' => $this->nama,
            'harga' => $this->harga,
            'liga_id' => $this->liga_id,
            'liga_id' => $this->is_ready,
            'jenis' => $this->jenis,
            'berat' => $this->berat,
            'gambar' => $this->gambar,
        ]);

        session()->flash('message', $this->products_id ? 'Product updated.' : 'Product Di Tambahkan');

        $this->closeModalPopover();

    }

    public function edit($id)
    {
        $products = products::findOrFail($id);
        $this->products_id = $id;
        $this->nama = $products->nama;
        $this->harga = $products->harga;
        $this->liga_id = $products->liga_id;
        $this->liga_id = $products->is_ready;
        $this->jenis = $products->jenis;
        $this->berat = $products->berat;
        $this->gambar = $products->gambar;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        products::find($id)->delete();
        session()->flash('message', 'Product Di Hapus');
    }

}