@extends('backend.admin.layouts.app')

@section('title', 'transaksi')

@section('content')

<div class="col-lg-12">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Transaksi</h5>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0"id="transaksi">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">No</th>
                            <th scope="col">Tiket</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Transaction Date</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($transaksis as $transaksi)
                        <tr>
                            <th scope="row">{{  $loop->iteration }}</th>
                            <td>{{ $transaksi->tiket->KategoriTiket->nama_kategori}}</td>
                            <td>{{ $transaksi->payment_method}}</td>
                            <td>{{ $transaksi->payment_status}}</td>
                            <td>{{ $transaksi->transaction_date}}</td>
                            <td>{{ $transaksi->amount}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#transaksi').DataTable();
    });
</script>

@endsection
