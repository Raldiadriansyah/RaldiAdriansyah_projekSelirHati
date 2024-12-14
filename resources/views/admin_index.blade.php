@extends('layouts.sneat', ['title' => 'Halaman Utama'])
@section('content')
<div class="row"  >
    <div class="col-lg-12 col-md-4" >
      <div class="row" >
        <div class="col-lg-3 col-md-6 col-12 mb-4" style="height: 210px">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between mb-3">
                <div class="avatar flex-shrink-0">
                  <img src="/sneat/assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="/Menu">Lihat Data Menu</a>
                  </div>
                </div>
              </div>
              <p class="mb-1"><b>Total Daftar Menu</b></p>
              <h4 class="card-title mb-2" style="font-size: 20px;">{{ $menu->count('id') }}</h4>
              <div class="d-flex align-items-center" style="gap: 20px; font-size: 20px">
                <small class="text-success fw-medium me-4">
                    <i></i> Tersedia <br>
                    {{ $menu->where('stok', 'Tersedia')->count() }}
                </small>
                <small class="text-danger fw-medium">
                    <i></i> Kosong <br>
                    {{ $menu->where('stok', 'Kosong')->count() }}
                </small>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-4" style="height: 210px">
          <div class="card h-100">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between mb-3">
                  <div class="avatar flex-shrink-0">
                    <img src="/sneat/assets/img/icons/unicons/wallet.png" alt="chart success" class="rounded">
                  </div>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                      <a class="dropdown-item" href="/Penjualan">Lihat Data Penjualan</a>
                    </div>
                  </div>
                </div>
                <p class="mb-1"><b>Total Transaksi Penjualan</b></p>
                <h4 class="card-title mb-2" style="font-size: 20px;">{{ $jual->count('id') }}</h4>
                <div class="d-flex align-items-center" style="gap: 5px; font-size: 20px">
                  <small class="text-success fw-medium me-4">
                      <i></i> Baru <br>
                      {{ $jual->where('status', 'baru')->count() }}
                  </small>
                  <small class="text-warning fw-medium" style="margin-right: 15px">
                      <i></i> Diproses <br>
                      {{ $jual->where('status', 'diproses')->count() }}
                  </small>
                  <small class="text-primary fw-medium">
                      <i></i> Selesai <br>
                      {{ $jual->where('status', 'selesai')->count() }}
                  </small>
              </div>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-4" style="height: 210px">
            <div class="card h-100">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between mb-4">
                      <div class="avatar flex-shrink-0">
                        <img src="/sneat/assets/img/icons/unicons/cc-success.png" alt="paypal" class="rounded">
                      </div>
                    </div>
                    <p class="mb-1" style="font-size: 22px"><b>Total Penjualan</b></p>
                    <small class="text-success fw-medium" style="font-size: 23px"><i class='bx bx-up-arrow-alt'></i>Rp. {{ $jual->where('status', 'selesai')->sum('total') }}</small>
                  </div>
                </div>        
            </div>
        <div class="col-lg-3 col-md-6 col-12 mb-4" style="height: 210px">
            <div class="card h-100">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between mb-4">
                      <div class="avatar flex-shrink-0">
                        <img src="/sneat/assets/img/icons/unicons/cc-warning.png" alt="paypal" class="rounded">
                      </div>
                    </div>
                    <p class="mb-1" style="font-size: 22px"><b>Total Pengeluaran</b></p>
                    <small class="text-warning fw-medium" style="font-size: 23px"><i class='bx bx-down-arrow-alt'></i>Rp. {{ $keluar->sum('total') }}</small>
                  </div>    
            </div>
        </div>
      </div>
    </div>
</div>





<div class="row">
    <!-- Grafik Pie Chart -->
    <div class="col-xl-6 col-lg-5 mb-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Jumlah Menu Berdasarkan Kategori</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" >
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    // Script for rendering the Pie Chart
    document.addEventListener('DOMContentLoaded', (event) => {
        // Convert PHP data to JavaScript
        const chartData = @json($penjualan);
  
        // Prepare the labels and values for the Pie chart
        const labels = ['minuman-kopi', 'minuman-teh', 'minuman-milkshake','minuman-others', 'makanan', 'lainnya'];
  
        // Sum the totals based on the status (baru, diproses, selesai)
        const values = labels.map(kategori => {
            const total = chartData.filter(item => item.kategori === kategori).reduce((sum, item) => sum + item.total, 0);
            return total;
        });
  
        // Set up the chart data and configuration
        const data = {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: ['#DC143C', '	#FF8C00', '#9400D3','#00FFFF', '#0000FF', '#7FFF00'],  
                hoverBackgroundColor: ['#DC143C', '	#FF8C00', '#9400D3', '#00FFFF', '#0000FF','#7FFF00'],
                hoverBorderColor: "rgba(234, 236, 244, 1)"
            }]
        };
  
        // Chart.js configuration
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                maintainAspectRatio: false,
                responsive: true, // Ensure the chart is responsive
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: true
                },
            }
        };
  
        // Get the canvas context and render the chart
        const ctx = document.getElementById('myPieChart').getContext('2d');
        new Chart(ctx, config);
    });
  </script>
@endsection
@endsection

