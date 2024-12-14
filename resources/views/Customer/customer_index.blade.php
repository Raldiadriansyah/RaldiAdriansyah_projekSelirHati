@extends('layouts.customer', ['title' => 'Data Menu'])
@section('content1')
    @foreach ($kopi as $item)
        <div class="col-md-4 text-center" style="">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>Rp.{{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($kopi as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <a href="" onclick="closeModal()"></a>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection



@section('content2')
    @foreach ($teh as $item)
        <div class="col-md-4 text-center" style="width: 430px">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>${{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($teh as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" onclick="window.location.href='/pesanan';" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection

@section('content3')
    @foreach ($milk as $item)
        <div class="col-md-4 text-center" style="width: 430px">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>${{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($milk as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" onclick="window.location.href='/pesanan';" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection

@section('content4')
    @foreach ($others as $item)
        <div class="col-md-4 text-center" style="width: 430px">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>${{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($others as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" onclick="window.location.href='/pesanan';" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection

@section('content5')
    @foreach ($makanan as $item)
        <div class="col-md-4 text-center" style="">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>${{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($makanan as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" onclick="window.location.href='/pesanan';" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection

@section('content6')
    @foreach ($lainnya as $item)
        <div class="col-md-4 text-center" style="width: 430px">
            <div class="menu-wrap">
                <div class="menu-img img mb-4"
                    style="background-image:  @if ($item->foto) <a href="{{ Storage::url($item->foto) }} target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="200px" height="200px" alt="" style="margin-bottom: 20px"></a> @endif
                                <div class="text">
                    <h2>{{ $item->nama }} <h4>( {{ $item->stok }} )</h4>
                    </h2>
                    <p class="price"><span>${{ $item->harga }}</span></p>
                    <p>
                        @if ($item->stok == 'Tersedia')
                            <a href="#modalTambah{{ $item->id }}" type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-bs-toggle="modal">Pesan</a>
                        @else
                            <a href="#" type="button" class="btn btn-danger btn-outline-danger" onclick="showOutOfStockAlert()">Pesan</a>
                        @endif
                    </p>
                </div>
            </div>
            <div class="text">
                <br>
                <br><br>
            </div>
        </div>
        </div>
    @endforeach
    @foreach ($lainnya as $item)
        <div class="modal fade" id="modalTambah{{ $item->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/pesanan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" onclick="window.location.href='/pesanan';" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="menu_id" value="{{ $item->id }}">
                            <h6 id="menu">{{ $item->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $item->nama }}">
                            <p id="harga">Rp{{ $item->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $item->harga }}">
                            <label for="jumlah">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlah" min="1" name="jumlah">
                            <input type="hidden" name="customer" value="{{ old('jumlah') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection
