<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <style>body {
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
                  <td><button class="btn btn-outline-danger btn-sm">X</button></td>
                  <td>Concert Linda Coline - Ticket 1</td>
                  <td>$10</td>
                  <td><input type="number" value="1" class="form-control form-control-sm" style="width: 60px;"></td>
                  <td>$10</td>
                </tr>
              </tbody>
            </table>
            <button class="btn btn-primary mt-3">Update Cart</button>
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
              <button class="btn btn-primary mt-2">Apply Coupon</button>
            </div>
            <h5>Cart Total</h5>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <span>$10</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <span>$10</span>
              </li>
            </ul>
            <button class="btn btn-danger mt-3 w-100">Check Out</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
