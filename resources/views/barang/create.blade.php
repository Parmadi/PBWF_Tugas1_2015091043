@extends('layouts.logged')

@section('title', 'Kelola Barang')

@section('content')
    <h1 class="fs-3 text-center">Tambah Data Barang</h1>
    <div class="w-50 mx-auto bg-white rounded p-4 my-3">
        <div class="mb-3">
            <form action="/barang" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama_barang"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <input name="harga_beli" type="number" min="0" class="form-control" id="harga_beli"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input name="harga_jual" type="number" min="0" class="form-control" id="harga_jual"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input name="stok" min="0" type="number" class="form-control" id="stok"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/barang" style="text-decoration: none;" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mb-5"></div>
@endsection
