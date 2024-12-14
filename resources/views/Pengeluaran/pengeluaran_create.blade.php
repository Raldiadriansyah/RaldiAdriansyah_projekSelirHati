@extends('layouts.sneat', ['title' => 'Tambah Data Menu'])
@section('content')
    <div class="card">
        @section('judul')
        <br>
        <h3 style="margin-top: 30px"> Tambah Data Pengeluaran</h3>           
        @endsection
        <div class="card-body">
            <form action="/Pengeluaran" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama Barang/Belanja</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"
                        placeholder="Masukkan Nama">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga') }}"
                        placeholder="Masukkan Harga">
                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                </div>
                <div class="form-group mt-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah') }}"
                        placeholder="Masukkan Jumlah">
                    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('js')
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#deskripsi_form').summernote();
        });
    </script>
@endsection
