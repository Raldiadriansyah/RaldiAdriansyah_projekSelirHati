@extends('layouts.sneat', ['title' => 'Tambah Data Menu'])
@section('content')
    <div class="card">
        @section('judul')
        <br>
        <h3 style="margin-top: 30px"> Tambah Data Menu</h3>           
        @endsection
        <div class="card-body">
            <form action="/Menu" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama Menu</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"
                        placeholder="Masukkan Nama Menu">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga') }}"
                        placeholder="Masukkan Harga Menu">
                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                </div>
                <div class="form-group mt-3">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control js-example-basic-single">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="minuman-kopi">Minuman-kopi</option>
                        <option value="minuman-teh">Minuman-teh</option>
                        <option value="minuman-milkshake">Minuman-milkshake</option>
                        <option value="minuman-others">Minuman-others</option>
                        <option value="makanan">Makanan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('kategori') }}</span>
                </div>
                <br>
                <div class="form-group mt-1 mb-3">
                 <label for="foto">Foto (jpg, jpeg, png)</label>
                    <input type="file" class="form-control @error('foto')is-invalid
                @enderror"
                        id="foto" name="foto">
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                </div>   
                <div class="form-group mt-3">
                    <label for="stok">Stok Menu</label>
                    <select name="stok" id="stok" class="form-control js-example-basic-single">
                        <option value="">-- Pilih --</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Kosong">Kosong</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <br>
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
