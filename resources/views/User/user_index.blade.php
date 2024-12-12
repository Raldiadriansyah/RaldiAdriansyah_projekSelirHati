@extends('layouts.sneat', ['title' => 'Data User'])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Data User</h3>
        @endsection
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $item->name }}</td>
                        <td> {{ $item->email }}</td>
                        <td> {{ $item->role }}</td>
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/user/{{ $item->id }}" method="POST" class="d-inline">
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
            {!! $user->links() !!}
        </div>
    </div>
</div>
@foreach ( $user as $item )
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
