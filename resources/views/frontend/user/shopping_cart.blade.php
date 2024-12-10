<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .payment-methods .card {
            margin-bottom: 10px;
        }

        .payment-methods img {
            width: 40px;
            margin-right: 10px;
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
                    </div>
                </div>

                <!-- Your Information Section -->
                <h4 class="mt-4">Your Information</h4>
                <div class="card p-3">
                    <form id="orderForm">
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
            </div>

            <!-- Payment Method Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Discount Code</h5>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                            <button class="btn btn-primary mt-2">Apply Coupon</button>
                        </div>
                        <h5>Cart Total</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span id="subtotal">{{ $tiket->harga_tiket }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Discount</span>
                                <span id="discount">0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <span id="total">{{ $tiket->harga_tiket }}</span>
                            </li>
                        </ul>

                        <form action="{{ route('user.checkout') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_tiket" value="{{ $tiket['id_tiket'] }}">
                            <input type="hidden" name="amount" id="amount" value="">
                            <button type="submit" onclick="syncTotal()" class="btn btn-danger mt-3 w-100">Check Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
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

        function syncTotal() {
            // Ambil nilai dari elemen dengan id="total"
            const totalValue = document.getElementById('total').innerText;

            // Set nilai ke elemen dengan id="amount"
            document.getElementById('amount').value = totalValue;

            // (Opsional) Periksa hasil di konsol
            console.log("Value synced to amount:", totalValue);
        }
    </script>
</body>

</html>
