@extends('layouts.sneat',['title' => 'Edit Data Menu'])
@section('content')
    <div class="card">
        <div class="card-body">
            @section('judul')
           <br>
           <h3 style="margin-top: 30px"> Edit Data Menu</h3>           
           @endsection
            <h5 class="card-title"> <b>{{ strtoupper($menu->nama) }}</b></h5>
            <form action="/Menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="nama">Nama Menu</label>
                    <input type="input" class="form-control @error('nama')is-invalid                        
                    @enderror" id="nama" name="nama" value="{{ old('nama') ?? $menu->nama}}" placeholder="Masukkan Nama Menu">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="harga">Harga Menu</label>
                    <input type="input" class="form-control @error('harga')is-invalid                        
                    @enderror" id="harga" name="harga" value="{{ old('harga') ?? $menu->harga}}" placeholder="Masukkan Harga Menu">
                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="kategori">Kategori Menu</label>
                    <select name="kategori" id="kategori" class="form-control js-example-basic-single">
                        <option value="" disabled {{ $menu->kategori == null ? 'selected' : '' }}>----- Pilih Kategori ------</option>
                        <option value="minuman-kopi" {{ $menu->kategori == 'minuman-kopi' ? 'selected' : '' }}>Minuman-kopi</option>
                        <option value="minuman-teh" {{ $menu->kategori == 'minuman-teh' ? 'selected' : '' }}>Minuman-teh</option>
                        <option value="minuman-milkshake" {{ $menu->kategori == 'minuman-milkshake' ? 'selected' : '' }}>Minuman-milkshake</option>
                        <option value="minuman-others" {{ $menu->kategori == 'minuman-others' ? 'selected' : '' }}>Minuman-others</option>
                        <option value="makanan" {{ $menu->kategori == 'makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="lainnya" {{ $menu->kategori == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('kategori') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="foto">Foto (jpg, jpeg, png)</label>
                    <input type="file" class="form-control @error('foto')is-invalid                        
                    @enderror" id="foto" name="foto">
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                    <img src="{{ Storage::url($menu->foto) }}" alt="Foto Menu" class="img-thumbnail mt-2" style="width: 100px; height: 100px">
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="stok">Stok Menu</label>
                    <select name="stok" id="stok" class="form-control js-example-basic-single">
                        <option value="" disabled {{ $menu->stok == null ? 'selected' : '' }}>----- Pilih Stok ------</option>
                        <option value="Tersedia" {{ $menu->stok == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Kosong" {{ $menu->stok == 'Kosong' ? 'selected' : '' }}>Kosong</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>

@endsection