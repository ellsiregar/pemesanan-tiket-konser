<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Keranjang Tiket dengan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cart-container {
            max-width: 1000px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-secondary:hover {
            background-color: #f0f0f0;
        }

        .total-price {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .discount-alert {
            color: green;
        }

        .discount-error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="cart-container">
            <h1 class="text-center mb-4">Keranjang Tiket</h1>

            <!-- Tabel Keranjang -->
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama Konser</th>
                        <th>Kategori Tiket</th>
                        <th>Harga Satuan</th>
                        <th>Tersedia</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="cart-body">
                    <tr>
                        <td>{{ $tiket->KategoriTiket->Konser->nama_konser }}</td>
                        <td>{{ $tiket->KategoriTiket->nama_kategori }}</td>
                        <td class="unit-price">Rp {{ number_format($tiket->harga_tiket, 0, ',', '.') }}</td>
                        <td class="available">{{ $tiket->quantity }}</td>
                        <td>
                            <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(this, -1)">-</button>
                            <span class="mx-2 quantity">1</span>
                            <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(this, 1)">+</button>
                        </td>
                        <td class="item-total">Rp {{ number_format($tiket->harga_tiket, 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="removeItem(this)">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Input Diskon -->
            <div class="mt-3">
                <label for="discount-code" class="form-label">Masukkan Kode Diskon</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="discount-code" placeholder="Kode diskon">
                    <button class="btn btn-primary" onclick="applyDiscount()">Terapkan</button>
                </div>
                <div id="discount-feedback" class="mt-2"></div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <h4>Potongan Diskon:</h4>
                <span id="discount-amount" class="total-price">Rp 0</span>
            </div>

            <!-- Total Harga -->
            <div class="d-flex justify-content-between align-items-center">
                <h4>Total Keseluruhan:</h4>
                <span id="grand-total" class="total-price">Rp {{ number_format($tiket->harga_tiket, 0, ',', '.') }}</span>
            </div>

            <!-- Tombol Checkout -->
            <div class="d-grid mt-4">
                <form action="{{ route('user.checkout-process') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_tiket" value="{{ $tiket->id_tiket }}">
                    <input type="hidden" name="amount" id="amount" value="{{ $tiket->harga_tiket }}">
                    <button type="submit" class="btn btn-success btn-lg w-100">Lanjutkan ke Pembayaran</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let discountApplied = false;

        function parsePrice(priceText) {
            return parseInt(priceText.replace(/\D/g, "")) || 0;
        }

        function updateQuantity(button, delta) {
            const row = button.closest("tr");
            const quantityElement = row.querySelector(".quantity");
            const availableElement = row.querySelector(".available");
            const unitPriceElement = row.querySelector(".unit-price");
            const itemTotalElement = row.querySelector(".item-total");

            let quantity = parseInt(quantityElement.textContent);
            const available = parseInt(availableElement.textContent);
            const unitPrice = parsePrice(unitPriceElement.textContent);

            if (delta > 0 && quantity >= available) {
                alert("Jumlah tidak bisa melebihi stok yang tersedia!");
                return;
            }

            quantity = Math.max(1, quantity + delta);
            quantityElement.textContent = quantity;

            const itemTotal = quantity * unitPrice;
            itemTotalElement.textContent = `Rp ${itemTotal.toLocaleString()}`;

            updateGrandTotal();
        }

        function removeItem(button) {
            const row = button.closest("tr");
            row.remove();
            updateGrandTotal();
        }

        window.onload = function() {
            // Inisialisasi nilai amount berdasarkan harga tiket
            const initialPrice = parsePrice(document.querySelector(".unit-price").textContent);
            const amountInput = document.querySelector("input[name='amount']");
            amountInput.value = initialPrice; // Set nilai amount ke harga tiket

            updateGrandTotal(); // Memperbarui total keseluruhan
        };

        function updateGrandTotal() {
            const itemTotals = document.querySelectorAll(".item-total");
            let grandTotal = 0;

            itemTotals.forEach((item) => {
                grandTotal += parsePrice(item.textContent);
            });

            document.getElementById("grand-total").textContent = `Rp ${grandTotal.toLocaleString()}`;

            // Update nilai pada input hidden amount
            const amountInput = document.querySelector("input[name='amount']");
            amountInput.value = grandTotal;

            if (discountApplied) {
                discountApplied = false;
                document.getElementById("discount-feedback").textContent = "";
                document.getElementById("discount-amount").textContent = "Rp 0";
            }
        }

        function applyDiscount() {
            const code = document.getElementById("discount-code").value;
            const grandTotalElement = document.getElementById("grand-total");
            const discountAmountElement = document.getElementById("discount-amount");
            const feedbackElement = document.getElementById("discount-feedback");

            if (discountApplied) {
                feedbackElement.textContent = "Diskon sudah diterapkan!";
                feedbackElement.className = "discount-alert";
                return;
            }

            fetch('/apply-discount', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        kode_diskon: code
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Membersihkan simbol '%' dari persentase diskon
                        const discountPercentageText = data.persentase_diskon.replace('%', '');
                        const discountPercentage = parseFloat(discountPercentageText);

                        let grandTotal = parsePrice(grandTotalElement.textContent);
                        const discountAmount = Math.floor((grandTotal * discountPercentage) / 100);

                        // Hitung ulang total setelah diskon
                        grandTotal -= discountAmount;

                        // Update elemen DOM
                        grandTotalElement.textContent = `Rp ${grandTotal.toLocaleString()}`;
                        discountAmountElement.textContent = `Rp ${discountAmount.toLocaleString()}`;

                        // Mengupdate nilai pada input hidden amount setelah diskon
                        const amountInput = document.querySelector("input[name='amount']");
                        amountInput.value = grandTotal;

                        feedbackElement.textContent = data.message;
                        feedbackElement.className = "discount-alert";
                        discountApplied = true;
                    } else {
                        feedbackElement.textContent = data.message;
                        feedbackElement.className = "discount-error";
                    }
                })
                .catch(() => {
                    feedbackElement.textContent = "Terjadi kesalahan saat memproses diskon.";
                    feedbackElement.className = "discount-error";
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>