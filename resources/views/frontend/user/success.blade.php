<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pembayaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #eaf2e9;
            font-family: 'Arial', sans-serif;
        }

        .confirmation-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .info-text {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
        }

        .concert-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4caf50;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #4caf50;
            border-color: #4caf50;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #4caf50;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="confirmation-container">
            <!-- Ikon Konfirmasi -->
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>

            <!-- Judul Halaman -->
            <h2 class="title">Pembayaran Anda Berhasil!</h2>

            <!-- Nama Konser -->
            <div class="concert-name">
                <p><strong>{{ $transaksi->tiket->KategoriTiket->Konser->nama_konser }}</strong></p>
            </div>

            <!-- Informasi Pembayaran -->
            <div class="info-text">
                <p>Terima kasih telah melakukan pembayaran. Tiket Anda telah berhasil dibeli.</p>
                <p>Berikut adalah detail pembelian Anda:</p>
            </div>

            <!-- Harga Tiket -->
            <div class="price">
                Rp {{ number_format($transaksi->amount, 0, ',', '.') }}
            </div>

            <!-- Tombol Kembali ke Beranda -->
            <a href="{{ route('user.dashboard') }}" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
