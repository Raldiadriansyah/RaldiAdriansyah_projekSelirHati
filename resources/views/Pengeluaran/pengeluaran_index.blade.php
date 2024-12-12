@extends('layouts.sneat', ['title' => 'Pesanan Masuk '])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Data Pengeluaran</h3>
        @endsection
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Admin</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($pengeluaran as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $item->nama }}</td>
                        <td> {{ $item->harga }}</td>
                        <td> {{ $item->jumlah }}</td>
                        <td> {{ $item->total }}</td>
                        <td>{{ $item->User->name ?? ' ----- ' }}</td>
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/Pengeluaran/{{ $item->id }}" method="POST" class="d-inline">
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
            {!! $pengeluaran->links() !!}
        </div>
    </div>
</div>
@foreach ( $pengeluaran as $item )
<div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditLabel"
    aria-hidden="true">
    <form action="/Pengeluaran/{{ $item->id }}" method="POST" enctype="multipart/form-data">
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
                        <label for="nama">Nama </b></label>
                        <input type="text"
                            class="form-control @error('nama')is-invalid @enderror"
                            id="nama" name="nama" value="{{ old('nama') ?? $item->nama }}"
                            placeholder="Masukkan Nama">
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="form-group mt-1 mb-3">
                        <label for="jumlah">jumlah</label>
                        <input type="number"
                            class="form-control @error('harga')is-invalid @enderror"
                            id="jumlah" name="jumlah" value="{{ old('harga') ?? $item->jumlah }}"
                            placeholder="Masukkan Nama Menu">
                        <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>
                    <div class="form-group mt-1 mb-3">
                        <label for="harga">Harga</label>
                        <input type="number"
                            class="form-control @error('jumlah')is-invalid @enderror"
                            id="harga" name="harga" value="{{ old('harga') ?? $item->harga }}"
                            placeholder="Masukkan Harga">
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
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