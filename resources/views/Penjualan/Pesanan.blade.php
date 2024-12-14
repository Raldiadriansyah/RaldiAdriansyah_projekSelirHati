@extends('layouts.sneat', ['title' => 'Pesanan Masuk '])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Pesanan - {{ $status }}</h3>
        @endsection
            <a href="/Penjualan" class="btn btn-primary{{ !request()->has('status')  ? 'active' : '' }}"
                style="margin-right: 12px">Baru</a>
            <a href="/Penjualan?status=diproses" class="btn btn-primary{{ request('status') == 'diproses' ? 'active' : '' }}"
                style="margin-right: 12px">Diproses</a>
            <a href="/Penjualan?status=selesai" class="btn btn-primary{{ request('status') == 'selesai' ? 'active' : '' }}"
                style="margin-right: 12px">Selesai</a>
                <br>
                <br>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Status</th>
                <th>Admin</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($pesanan as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $item->Menu->nama }}</td>
                        <td> {{ $item->Menu->harga }}</td>
                        <td> {{ $item->jumlah }}</td>
                        <td> {{ $item->total }}</td>
                        <td style="
                        color: 
                            {{ $item->status == 'baru' ? '#7FFF00' : ($item->status == 'diproses' ? '#FFC107' : ($item->status == 'selesai' ? '#0D6EFD' : '#000')) }}">
                        {{ $item->status }}
                    </td>
                        <td>{{ $item->User->name ?? ' ----- ' }}</td>
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/pesanan/{{ $item->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2"
                                    onclick="return.confirm('Yakin ingin menghapus data?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin: left; width: 10%">
            {!! $pesanan->links() !!}
        </div>
    </div>
</div>
@foreach ( $pesanan as $item )
<div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditLabel"
    aria-hidden="true">
    <form action="/pesanan/{{ $item->id }}" method="POST">
        @method('put')
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mt-1 mb-3">
                        <label for="menu_id">Nama Menu : <b>{{ $item->Menu->nama }}</b></label>
                        <input type="hidden"
                            class="form-control @error('menu_id')is-invalid                        
                    @enderror"
                            id="menu_id" name="menu_id" value="{{ old('menu_id') ?? $item->menu_id }}"
                            placeholder="Masukkan Nama Menu">
                        <span class="text-danger">{{ $errors->first('menu_id') }}</span>
                    </div>
                    <div class="form-group mt-1 mb-3">
                        <label for="harga">harga : Rp.<b>{{ $item->Menu->harga }}</b></label>
                        <input type="hidden"
                            class="form-control @error('harga')is-invalid                        
                    @enderror"
                            id="harga" name="harga" value="{{ old('harga') ?? $item->Menu->harga }}"
                            placeholder="Masukkan Nama Menu">
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                    </div>
                    <div class="form-group mt-1 mb-3">
                        <label for="jumlah">jumlah</label>
                        <input type="number"
                            class="form-control @error('jumlah')is-invalid                        
                    @enderror"
                            id="jumlah" name="jumlah" value="{{ old('jumlah') ?? $item->jumlah }}"
                            placeholder="Masukkan Nama Menu">
                        <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>

                    <div class="form-group mt-1 mb-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control js-example-basic-single">
                            <option value="" disabled {{ $item->status == null ? 'selected' : '' }}>----- Pilih Status ------</option>
                            @if ($item->status == 'selesai')
                                <option value="" selected>Status sudah selesai</option>
                            @elseif ($item->status == 'diproses')
                                <option value="diproses" {{ $item->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="selesai" {{ $item->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            @else
                                <option value="baru" {{ $item->status == 'baru' ? 'selected' : '' }}>Baru</option>
                                <option value="diproses" {{ $item->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="selesai" {{ $item->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            @endif
                        </select>
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </div>
    </form>
</div>    
@endforeach
@endsection
