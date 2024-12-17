@extends('layouts.sneat', ['title' => 'Pesanan Masuk '])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Data Pengeluaran</h3>
        @endsection

        <div class="d-flex align-items-center mb-3">
            <div class="">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari Data Pengeluaran..."
                    style="width: 500px">
            </div>
        </div>
        <table class="table table-striped" id="pengeluaranTable">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Admin</th>
                <th>Aksi</th>
            </tr>
          </thead>
            <tbody>
                @foreach ($pengeluaran as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td class="pengeluaran-name"> {{ $item->nama }}</td>
                        <td> {{number_format( $item->harga )}}</td>
                        <td> {{ $item->jumlah }}</td>
                        <td> {{ number_format($item->total) }}</td>
                        <td>{{ $item->User->name ?? ' ----- ' }}</td>
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/Pengeluaran/{{ $item->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2" id="delete">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex align-items-center mb-3">
            <p class="mb-0 me-2" style="margin-top: 12px">Halaman :</p>
            <div id="paginationControls" class="d-flex mt-3"></div>
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
                    <h5 class="modal-title" id="modalEditLabel">Edit Pengeluaran</h5>
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

<script>
    const rowsPerPage = 10;
    let currentPage = 1;

    const tableBody = document.querySelector('#pengeluaranTable tbody');
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

            button.addEventListener('click', function() {
                currentPage = i;
                displayRows();
                createPaginationButtons();
            });

            paginationControls.appendChild(button);
        }
    }


    displayRows();
    createPaginationButtons();

    document.getElementById('searchInput').addEventListener('keyup', function() {
        const input = this.value.toLowerCase();
        let visibleRows = 0;

        rows.forEach(row => {
            const menuName = row.querySelector('.pengeluaran-name').innerText.toLowerCase();
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

                button.addEventListener('click', function() {
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