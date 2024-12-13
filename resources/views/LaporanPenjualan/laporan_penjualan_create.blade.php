@extends('layouts.sneat', ['title' => 'Laporan-penjualan'])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Data Penjualan</h3>
        @endsection

        <form action="/laporan-penjualan" method="GET">
            <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label for="tanggal_mulai">Tanggal Awal Data</label>
                    <input type="date" name="tanggal_mulai" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_akhir">Tanggal Akhir Data</label>
                    <input type="date" name="tanggal_akhir" class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-2">Cetak</button>
        </form>
    </div>
</div>


@endsection
