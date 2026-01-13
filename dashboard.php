<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <div>
          <?php include('sidebar.php'); ?>
 <main>
            <div class="header">
                <h1>Dashboard</h1>
                <div class="date">
                    <i class="far fa-calendar"></i>
                    <span id="current-date"></span>
                </div>
            </div>

            <!-- CARDS -->
            <div class="cards">
                <div class="card">
                    <div class="card-icon blue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Omset Hari Ini</h3>
                    <h2>Rp 0</h2>
                    <p>Belum ada transaksi</p>
                    <div class="progress-circle">
                        <svg width="70" height="70">
                            <circle class="bg" cx="35" cy="35" r="30"></circle>
                            <circle class="progress" cx="35" cy="35" r="30" 
                                    stroke="#6366f1" 
                                    stroke-dasharray="188.4" 
                                    stroke-dashoffset="188.4"></circle>
                        </svg>
                        <div class="progress-text">0%</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Omset Bulan Ini</h3>
                    <h2>Rp 0</h2>
                    <p>Belum ada transaksi</p>
                    <div class="progress-circle">
                        <svg width="70" height="70">
                            <circle class="bg" cx="35" cy="35" r="30"></circle>
                            <circle class="progress" cx="35" cy="35" r="30" 
                                    stroke="#10b981" 
                                    stroke-dasharray="188.4" 
                                    stroke-dashoffset="188.4"></circle>
                        </svg>
                        <div class="progress-text">0%</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-icon orange">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Penjualan Hari Ini</h3>
                    <h2>0</h2>
                    <p>Transaksi</p>
                    <div class="progress-circle">
                        <svg width="70" height="70">
                            <circle class="bg" cx="35" cy="35" r="30"></circle>
                            <circle class="progress" cx="35" cy="35" r="30" 
                                    stroke="#f59e0b" 
                                    stroke-dasharray="188.4" 
                                    stroke-dashoffset="188.4"></circle>
                        </svg>
                        <div class="progress-text">0%</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-icon red">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3>Penjualan Bulan Ini</h3>
                    <h2>0</h2>
                    <p>Transaksi</p>
                    <div class="progress-circle">
                        <svg width="70" height="70">
                            <circle class="bg" cx="35" cy="35" r="30"></circle>
                            <circle class="progress" cx="35" cy="35" r="30" 
                                    stroke="#ef4444" 
                                    stroke-dasharray="188.4" 
                                    stroke-dashoffset="188.4"></circle>
                        </svg>
                        <div class="progress-text">0%</div>
                    </div>
                </div>
            </div>

            <!-- PRODUK TERLARIS TABLE -->
            <div class="recent-orders">
                <h2>Produk Terlaris</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kode Produk</th>
                            <th>Kategori</th>
                            <th>Jumlah Terjual</th>
                            <th>Total Omset</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="fas fa-box-open"></i>
                                    <h3>Belum Ada Data Penjualan</h3>
                                    <p>Data produk terlaris akan muncul setelah ada transaksi</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>       
</div>
</body>
</html>