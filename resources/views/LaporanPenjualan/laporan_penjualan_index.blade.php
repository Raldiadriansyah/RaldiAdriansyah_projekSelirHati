@extends('layouts.sneat', ['title' => 'Laporan-penjualan'])
@section('content')
<div class="card">
    <div class="card-body">
    @section('judul')
        <br>
        <h3 style="margin-top: 30px">Laporan Penjualan</h3>
    @endsection
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
            <th>Admin</th>
        </tr>
        <tbody>
            @foreach ($models as $item)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->Menu->nama }}</td>
                    <td> {{ $item->Menu->harga }}</td>
                    <td> {{ $item->jumlah }}</td>
                    <td> {{ $item->total }}</td>
                    <td> {{ $item->status }}</td>
                    <td>{{ $item->User->name ?? ' ----- ' }}</td>
                    
                </tr>
            @endforeach
        </tbody>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Total Penjualan :</b></td>
                <td><b>{{ $models->sum('total') }}</b></td>
                <td></td>
                <td></td>
            </tr>
        
    </table>
   
</div>
</div>
@endsection

