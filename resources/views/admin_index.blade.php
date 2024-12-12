@extends('layouts.sneat', ['title' => 'Halaman Utama'])
@section('content')
<p>
    <a href="#modalTambah" type="button"
        class="btn btn-primary btn-outline-primary" data-toggle="modal"
        data-bs-toggle="modal">Pesan</a>
    
</p>
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel"
    aria-hidden="true">
    <form action="/cust/simpan" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="">Tambah Pesanan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection