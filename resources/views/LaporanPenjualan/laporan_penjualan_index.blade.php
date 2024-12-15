@extends('layouts.sneat', ['title' => 'Laporan-penjualan'])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Laporan Penjualan</h3>
        @endsection
        <button id="buttonPrint" class="btn btn-primary mb-3">Cetak Laporan</button>

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

<div style="display: none" id="laporan">
    <h2 class="text-center" style="text-align: center;">Laporan Data Penjualan <br>Warkop Selir Hati</h2>
    <br>
    <table style="border-collapse: collapse; width: 100%; text-align: center; border: 1px solid #ddd;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Menu</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Harga</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Jumlah</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Status</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($models as $item)
                <tr>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $loop->iteration }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->Menu->nama }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->Menu->harga }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->jumlah }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->total }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->status }}</td>
                    <td  style="border: 1px solid #ddd; padding: 8px;">{{ $item->User->name ?? ' ----- ' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <b style="margin-left: 290px">Total Penjualan : <b style="margin-left: 22px">{{ $models->sum('total') }}</b></b>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#buttonPrint').click(function() {

            var printContent = document.getElementById('laporan').innerHTML;

            var iframe = document.createElement('iframe');

            iframe.style.position = 'absolute';
            iframe.style.width = '0';
            iframe.style.height = '0';
            iframe.style.border = 'none';

            document.body.appendChild(iframe);
            var doc = iframe.contentWindow.document;

            doc.open();
            doc.write('<html><head><title>Print Laporan</title>');
            doc.write('</head><body>');
            doc.write(printContent);
            doc.write('</body></html>');
            doc.close();

            iframe.contentWindow.focus();
            iframe.contentWindow.print();

            document.body.removeChild(iframe);
        });
    });
</script>
@endsection
