<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .btn-primary {
            background-color: #ff4081;
            border-color: #ff4081;
        }

        .btn-primary:hover {
            background-color: #e53976;
            border-color: #e53976;
        }

        .btn-danger {
            background-color: #ff1744;
            border-color: #ff1744;
        }

        .btn-danger:hover {
            background-color: #d50000;
            border-color: #d50000;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <!-- Cart Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Remove</th>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><button class="btn btn-outline-danger btn-sm"
                                            onclick="removeItem(this)">X</button></td>
                                    <td>{{ $tiket->KategoriTiket->Konser->nama_konser }}</td>
                                    <td class="price">{{ $tiket->harga_tiket }}</td>
                                    <td><input type="number" value="1"
                                            class="form-control form-control-sm quantity" style="width: 60px;"
                                            oninput="updateTotal(this)"></td>
                                    <td class="total-price">{{ $tiket->harga_tiket }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary mt-3" onclick="updateCart()">Update Cart</button>
                    </div>
                </div>
            </div>
            <!-- Discount and Total Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Discount Code</h5>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                            <button class="btn btn-primary mt-2" onclick="applyDiscount()">Apply Coupon</button>
                        </div>
                        <h5>Cart Total</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span id="subtotal">{{ $tiket->harga_tiket }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Discount</span>
                                <span id="discount">0.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <span id="total">{{ $tiket->harga_tiket }}</span>
                            </li>
                        </ul>

                        <button class="btn btn-danger mt-3 w-100">Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to update the total price for each ticket
        function updateTotal(inputElement) {
            var quantity = inputElement.value;
            var price = inputElement.closest('tr').querySelector('.price').innerText;
            var totalPrice = price * quantity;

            inputElement.closest('tr').querySelector('.total-price').innerText = totalPrice.toFixed(2);

            updateCart();
        }

        // Function to update the cart summary (Subtotal and Total)
        function updateCart() {
            var totalPrices = document.querySelectorAll('.total-price');
            var subtotal = 0;

            totalPrices.forEach(function(totalPrice) {
                subtotal += parseFloat(totalPrice.innerText);
            });

            document.getElementById('subtotal').innerText = subtotal.toFixed(2);
            document.getElementById('total').innerText = subtotal.toFixed(2);
        }

        // Function to remove an item from the cart
        function removeItem(buttonElement) {
            var row = buttonElement.closest('tr');
            row.remove();
            updateCart();
        }
    </script>
    <script>
        const discounts = @json($diskons);

        function applyDiscount() {
            const couponInput = document.querySelector('input[placeholder="Coupon Code"]');
            const couponCode = couponInput.value.trim();
            const discount = discounts.find(d => d.diskon_kode === couponCode);

            if (discount) {
                const subtotalElement = document.getElementById('subtotal');
                const discountElement = document.getElementById('discount');
                const totalElement = document.getElementById('total');

                // Ambil subtotal
                const subtotal = parseFloat(subtotalElement.innerText);

                // Hitung jumlah diskon
                const discountAmount = (subtotal * discount.persentase_diskon) / 100;

                // Hitung total setelah diskon
                const totalAfterDiscount = subtotal - discountAmount;

                // Update UI
                discountElement.innerText = discountAmount.toFixed(2);
                totalElement.innerText = totalAfterDiscount.toFixed(2);
                alert(`Diskon ${discount.persentase_diskon}% telah diterapkan!`);
            } else {
                alert('Kode kupon tidak valid!');
            }
        }
    </script>
</body>

</html>
