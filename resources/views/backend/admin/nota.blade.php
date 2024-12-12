<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .nota {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .nota-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .nota-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #555;
        }
        .no-print {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="nota">
        <div class="nota-header">
            <h3>Nota Pembelian Tiket</h3>
            <p><strong>{{ $item->tiket->KategoriTiket->Konser->nama_konser ?? 'Tidak Diketahui' }}</strong></p>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nama Event</th>
                    <td>{{ $item->tiket->KategoriTiket->Konser->nama_konser ?? 'Tidak Diketahui' }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pembelian</th>
                    <td>{{ $item->transaction_date }}</td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td>Rp{{ number_format($item->amount, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Status Pembayaran</th>
                    <td>{{ ucfirst($item->payment_status) }}</td>
                </tr>
            </tbody>
        </table>
        <div class="nota-footer">
            <p>Terima kasih telah membeli tiket!</p>
        </div>
    </div>

    <div class="no-print">
        <button class="btn btn-primary" onclick="window.print()">Cetak Nota</button>
        <a href="{{ route('user.history') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
