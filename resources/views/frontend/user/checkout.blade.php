{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-8">
                <h4 class="mb-4">YOUR INFORMATION</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone *</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                </form>
            </div>

            <!-- Order Section -->
            <div class="col-md-4">
                <h4 class="mb-4">YOUR ORDER</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>EVENT</th>
                            <th class="text-end">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $tiket->KategoriTiket->Konser->nama_konser }}</td>
                            <td class="text-end">$15</td>
                        </tr>
                        <tr>
                            <td>SUBTOTAL</td>
                            <td class="text-end">{{ $tiket->harga_tiket }}</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td class="text-end"><strong>{{ $tiket->harga_tiket }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
