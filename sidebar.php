<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside id="sidebar">
            <div class="top">
                <div class="logo">
                    <img src="assets/images/logomerah.png" alt="Logo">
                    <div class="logo-text">
                    </div>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="sidebar">
                <a href="dashboard.php" class="active">
                    <span class="material-symbols-outlined">browse</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="transaksi.php">
                    <span class="material-symbols-outlined">contract</span>
                    <h3>Transaksi</h3>
                </a>

                <!-- Menu Produk -->
                <div class="menu-group">
                    <a href="#" class="menu-title">
                        <span class="material-symbols-outlined">package_2</span>
                        <h3>Produk</h3>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">box_add</span>
                                Input Produk
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">list_alt</span>
                                Daftar Produk
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Menu HPP -->
                <a href="#">
                    <span class="material-symbols-outlined">calculate</span>
                    <h3>HPP</h3>
                </a>

                <!-- Menu Laporan -->
                <div class="menu-group">
                    <a href="#" class="menu-title">
                        <span class="material-symbols-outlined">monitoring</span>
                        <h3>Laporan</h3>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Laporan Produk</a></li>
                        <li><a href="#">Laporan Mutasi Produk</a></li>
                        <li><a href="#">Laporan Transaksi</a></li>
                        <li><a href="#">Laporan Detail Transaksi</a></li>
                        <li><a href="#">Laporan Pendapatan</a></li>
                        <li><a href="#">Riwayat HPP</a></li>
                    </ul>
                </div>

                <a href="#">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Akun</h3>  
                </a>

                <!-- Logout -->
                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Log out</h3>
                </a>
            </div>
        </aside>

    </div>
    
    <script src="sidebar.js"></script>
</body>
</html>