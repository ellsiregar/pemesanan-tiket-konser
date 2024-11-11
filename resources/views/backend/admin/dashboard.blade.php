@extends('backend.admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Website Pemesanan Tiket</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
              <tr class="border-2 border-bottom border-primary border-0">
                <th scope="col" class="ps-0">Page Title</th>
                <th scope="col" >Link</th>
                <th scope="col" class="text-center">Pageviews</th>
                <th scope="col" class="text-center">Page Value</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">Konser</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
                </td>
                <td class="text-center fw-medium">18,456</td>
                <td class="text-center fw-medium">$2.40</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">Tiket</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
                </td>
                <td class="text-center fw-medium">17,452</td>
                <td class="text-center fw-medium">$0.97</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">SeatAllocations</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
                </td>
                <td class="text-center fw-medium">12,180</td>
                <td class="text-center fw-medium">$7,50</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">Transaksi</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
                </td>
                <td class="text-center fw-medium">800</td>
                <td class="text-center fw-medium">$5,50</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium border-0">
                  <span class="table-link1 text-truncate d-block">Review</span>
                </th>
                <td class="border-0">
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
                </td>
                <td class="text-center fw-medium border-0">1300</td>
                <td class="text-center fw-medium border-0">$2,15</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
