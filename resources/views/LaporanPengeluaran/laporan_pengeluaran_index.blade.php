@extends('layouts.sneat', ['title' => 'Laporan-penjualan'])
@section('content')
<div class="card">
    <div class="card-body">
    @section('judul')
        <br>
        <h3 style="margin-top: 30px">Laporan Pengeluaran</h3>
    @endsection
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Admin</th>
        </tr>
        <tbody>
            @foreach ($models as $item)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nama }}</td>
                    <td> {{ $item->harga }}</td>
                    <td> {{ $item->jumlah }}</td>
                    <td> {{ $item->total }}</td>
                    <td>{{ $item->User->name ?? ' ----- ' }}</td>
                </tr>
            @endforeach
        </tbody>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Total Pengeluaran :</b></td>
                <td><b>{{ $models->sum('total') }}</b></td>
                <td></td>
            </tr>
        
    </table>

</div>
</div>
@endsection

