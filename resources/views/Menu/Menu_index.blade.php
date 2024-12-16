@extends('layouts.sneat', ['title' => 'Data Menu'])
@section('content')
    <div class="card">
        <div class="card-body">
        @section('judul')
            <br>
            <h3 style="margin-top: 30px">Data Menu - {{ $kategori }}</h3>
        @endsection

        <div class="d-flex align-items-center mb-3">
            <div aria-label="Filter kategori">
                <a href="/Menu" class="btn btn-primary{{ !request()->has('kategori') ? 'active' : '' }}"
                    style="margin-right: 12px">Semua</a>
                <a href="/Menu?kategori=minuman"
                    class="btn btn-primary{{ request('kategori') == 'minuman' ? 'active' : '' }}"
                    style="margin-right: 12px">Minuman</a>
                <a href="/Menu?kategori=makanan"
                    class="btn btn-primary{{ request('kategori') == 'makanan' ? 'active' : '' }}"
                    style="margin-right: 12px">Makanan</a>
                <a href="/Menu?kategori=lainnya"
                    class="btn btn-primary{{ request('kategori') == 'lainnya' ? 'active' : '' }}"
                    style="margin-right: 12px">Lainnya</a>

            </div>

            <div class="ms-auto">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari Menu..."
                    style="width: 500px">
            </div>
        </div>

        <br>
        <table class="table table-striped" id="menuTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td class="menu-name"> {{ $item->nama }}</td>
                        <td> {{ $item->harga }}</td>
                        <td> {{ $item->kategori }}</td>
                        <td>
                            @if ($item->foto)
                                <a href="{{ Storage::url($item->foto) }}" target="blank">
                                    <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px"
                                        alt="">
                                </a>
                            @endif
                        </td>
                        <td> {{ $item->stok }}</td>
                        <td>
                            <a href="#modalEdit{{ $item->id }}" class="btn btn-warning btn-sm ml-2"
                                data-toggle="modal" data-bs-toggle="modal">Edit</a>
                            <form action="/Menu/{{ $item->id }}" method="POST" class="d-inline">
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

@foreach ($menu as $item)
    <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <form action="/Menu/{{ $item->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Edit Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group mt-1 mb-3">
                            <label for="nama">Nama Menu</label>
                            <input type="input"
                                class="form-control @error('nama')is-invalid                        
                        @enderror"
                                id="nama" name="nama" value="{{ old('nama') ?? $item->nama }}"
                                placeholder="Masukkan Nama Menu">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group mt-1 mb-3">
                            <label for="harga">Harga Menu</label>
                            <input type="input"
                                class="form-control @error('harga')is-invalid                        
                        @enderror"
                                id="harga" name="harga" value="{{ old('harga') ?? $item->harga }}"
                                placeholder="Masukkan Harga Menu">
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        </div>
                        <div class="form-group mt-1 mb-3">
                            <label for="kategori">Kategori Menu</label>
                            <select name="kategori" id="kategori" class="form-control js-example-basic-single">
                                <option value="" disabled {{ $item->kategori == null ? 'selected' : '' }}>-----
                                    Pilih Kategori ------</option>
                                <option value="minuman-kopi" {{ $item->kategori == 'minuman-kopi' ? 'selected' : '' }}>
                                    Minuman-kopi</option>
                                <option value="minuman-teh" {{ $item->kategori == 'minuman-teh' ? 'selected' : '' }}>
                                    Minuman-teh</option>
                                <option value="minuman-milkshake"
                                    {{ $item->kategori == 'minuman-milkshake' ? 'selected' : '' }}>Minuman-milkshake
                                </option>
                                <option value="minuman-others"
                                    {{ $item->kategori == 'minuman-others' ? 'selected' : '' }}>Minuman-others</option>
                                <option value="makanan" {{ $item->kategori == 'makanan' ? 'selected' : '' }}>Makanan
                                </option>
                                <option value="lainnya" {{ $item->kategori == 'lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                            </select>
                            <span class="text-danger">{{ $errors->first('kategori') }}</span>
                        </div>
                        <div class="form-group mt-1 mb-3">
                            <label for="foto">Foto (jpg, jpeg, png)</label>
                            <input type="file"
                                class="form-control @error('foto')is-invalid                        
                        @enderror"
                                id="foto" name="foto">
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                            <img src="{{ Storage::url($item->foto) }}" alt="Foto Menu" class="img-thumbnail mt-2"
                                style="width: 100px; height: 100px">
                        </div>
                        <div class="form-group mt-1 mb-3">
                            <label for="stok">Stok Menu</label>
                            <select name="stok" id="stok" class="form-control js-example-basic-single">
                                <option value="" disabled {{ $item->stok == null ? 'selected' : '' }}>-----
                                    Pilih Stok ------</option>
                                <option value="Tersedia" {{ $item->stok == 'Tersedia' ? 'selected' : '' }}>Tersedia
                                </option>
                                <option value="Kosong" {{ $item->stok == 'Kosong' ? 'selected' : '' }}>Kosong</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
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

    const tableBody = document.querySelector('#menuTable tbody');
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
            const menuName = row.querySelector('.menu-name').innerText.toLowerCase();
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
