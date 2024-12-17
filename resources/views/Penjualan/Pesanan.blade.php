@extends('layouts.sneat', ['title' => 'Pesanan Masuk '])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Pesanan - {{ $status }}</h3>
        @endsection

        <div class="d-flex align-items-center mb-3">
            <div aria-label="Filter kategori">
                <a href="/Penjualan" class="btn btn-primary{{ !request()->has('status')  ? 'active' : '' }}"
                    style="margin-right: 12px">Baru</a>
                <a href="/Penjualan?status=diproses" class="btn btn-primary{{ request('status') == 'diproses' ? 'active' : '' }}"
                    style="margin-right: 12px">Diproses</a>
                <a href="/Penjualan?status=selesai" class="btn btn-primary{{ request('status') == 'selesai' ? 'active' : '' }}"
                    style="margin-right: 12px">Selesai</a>
    
            </div>

            <div class="ms-auto">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari Pesanan Berdasarkan Nama..." style="width: 500px">
            </div>
        </div>
        <table class="table table-striped" id="pesananTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Admin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanan as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td class="pesanan-name"> {{ $item->nama }}</td>
                        <td> {{ $item->Menu->nama }}</td>
                        <td> {{ number_format($item->Menu->harga) }}</td>
                        <td> {{ $item->jumlah }}</td>
                        <td> {{ number_format($item->total) }}</td>
                        <td style="
                        color: 
                            {{ $item->status == 'baru' ? '#7FFF00' : ($item->status == 'diproses' ? '#FFC107' : ($item->status == 'selesai' ? '#0D6EFD' : '#000')) }}">
                        {{ $item->status }}
                    </td>
                        <td>{{ $item->User->name ?? ' ----- ' }}</td>
                        @if (($item->status == 'baru' || $item->status == 'diproses'))
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/pesanan/{{ $item->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2"
                                id="delete">
                                    Hapus
                                </button>
                            </form>
                        </td>
                        @elseif (($item->status=='selesai'))
                           <td><i>Tidak Ada Aksi</i></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex align-items-center mb-3">
            <p class="mb-0 me-2" style="margin-top: 12px">Halaman :</p> 
            <div id="paginationControls" class="d-flex mt-3"></div> 
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

<script>
    const rowsPerPage = 10; 
    let currentPage = 1; 

    const tableBody = document.querySelector('#pesananTable tbody');
    const rows = Array.from(tableBody.querySelectorAll('tr'));
    const paginationControls = document.getElementById('paginationControls');

    function displayRows() {
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = (index >= start && index < end) ? '' : 'none';
        });
    }

    function createPaginationButtons() {
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        paginationControls.innerHTML = ''; 

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.className = 'btn btn-secondary btn-sm mx-1';
            button.innerText = i;

            if (i === currentPage) {
                button.classList.add('active');
            }

            button.addEventListener('click', function () {
                currentPage = i;
                displayRows();
                createPaginationButtons();
            });

            paginationControls.appendChild(button);
        }
    }


    displayRows();
    createPaginationButtons();

    document.getElementById('searchInput').addEventListener('keyup', function () {
        const input = this.value.toLowerCase();
        let visibleRows = 0;

        rows.forEach(row => {
            const menuName = row.querySelector('.pesanan-name').innerText.toLowerCase();
            if (menuName.includes(input)) {
                row.style.display = '';
                visibleRows++;
            } else {
                row.style.display = 'none'; 
            }
        });

        const filteredRows = rows.filter(row => row.style.display === '');
        const filteredTotalPages = Math.ceil(filteredRows.length / rowsPerPage);

        if (visibleRows > rowsPerPage) {
            currentPage = 1;
            rows.forEach((row, index) => {
                row.style.display = (index < rowsPerPage) ? '' : 'none';
            });

            paginationControls.innerHTML = '';
            for (let i = 1; i <= filteredTotalPages; i++) {
                const button = document.createElement('button');
                button.className = 'btn btn-secondary btn-sm mx-1';
                button.innerText = i;

                if (i === currentPage) {
                    button.classList.add('active');
                }

                button.addEventListener('click', function () {
                    currentPage = i;
                    filteredRows.forEach((row, index) => {
                        row.style.display = (index >= (currentPage - 1) * rowsPerPage &&
                                             index < currentPage * rowsPerPage) ? '' : 'none';
                    });
                });

                paginationControls.appendChild(button);
            }
        } else {
            paginationControls.innerHTML = ''; 
        }
    });
</script>
@endsection
