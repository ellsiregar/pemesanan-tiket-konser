<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Halaman Pembayaran Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .payment-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .info-text {
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 30px;
            color: #555;
        }

        .concert-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            color: #4caf50;
        }

        .btn-primary {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .alert-message {
            text-align: center;
            font-size: 1rem;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="payment-container">
            <h2 class="title">Pembelian Tiket Konser</h2>

            <!-- Nama Konser -->
            <div class="concert-name">
                <p class="m-0"><strong>{{ $transaksi->tiket->KategoriTiket->Konser->nama_konser }}</strong></p>
                <p><strong>{{ $transaksi->tiket->KategoriTiket->nama_kategori }}</strong></p>
            </div>

            <!-- Informasi Pembelian -->
            <div class="info-text">
                <p>Anda akan melakukan pembelian tiket untuk konser tersebut dengan harga:</p>
            </div>

            <!-- Harga Tiket -->
            <div class="price">
                Rp {{ number_format($transaksi->amount, 0, ',', '.') }}
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100" id="pay-button">Bayar Sekarang</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $transaksi->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    window.location.href = '{{ route('user.checkout-success', $transaksi->id_transaksi) }}'
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
</body>

</html>