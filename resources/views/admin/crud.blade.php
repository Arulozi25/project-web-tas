@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-primary">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <table class="table">

        <button wire:click="create()" class="btn btn-primary">DATA PRODUCTS</button>
        @if($isModalOpen)
        @include('livewire.create')
        @endif

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="border px-4 py-2">{{ $product->id }}</td>
                                <td class="border px-4 py-2">{{ $product->nama }}</td>
                                <td class="border px-4 py-2">{{ $product->harga}}</td>
                                <td class="border px-4 py-2">{{ $product->liga_id }}</td>
                                <td class="border px-4 py-2">{{ $product->is_ready }}</td>
                                <td class="border px-4 py-2">{{ $product->jenis}}</td>
                                <td class="border px-4 py-2">{{ $product->berat}}</td>
                                <td class="border px-4 py-2"><img src="{{ asset('assets/sayur') }}/{{ $product->gambar }}" class="img-fluid"></td>
                                <td class="border px-4 py-2">
                                    <button wire:click="edit({{ $product->id }})" class="btn btn-primary btn-lg">Edit</button>
                                    <button wire:click="delete({{ $product->id }})" class="btn btn-danger btn-lg">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

@endsection