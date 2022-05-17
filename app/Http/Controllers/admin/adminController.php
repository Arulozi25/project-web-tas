<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;

use Livewire\Component;
use Livewire\WithPagination;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($this->search) {
            $products = Product::where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::paginate(8);
        }

        return view('admin.Dasboard', [
            'products' => $products,
            'title' => 'Semua Produk'
        ]);
    }
}
