@extends('backend.admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center gap-2 mb-4">Traffic Overview
                        <span>
                            <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="Traffic Overview"></iconify-icon>
                        </span>
                    </h5>
                    <div id="traffic-overview"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="../assets/images/backgrounds/product-tip.png" alt="image" class="img-fluid" width="205">
                    <h4 class="mt-7">Productivity Tips!</h4>
                    <p class="card-subtitle mt-2 mb-3">Duis at orci justo nulla in libero id leo molestie sodales phasellus justo.</p>
                    <button class="btn btn-primary mb-3">View All Tips</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View by page title and screen class</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0">
                            <thead>
                                <tr class="border-2 border-bottom border-primary border-0">
                                    <th scope="col" class="ps-0">Page Title</th>
                                    <th scope="col">Link</th>
                                    <th scope="col" class="text-center">Pageviews</th>
                                    <th scope="col" class="text-center">Page Value</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row" class="ps-0 fw-medium"><span class="table-link1 text-truncate d-block">Welcome to our website</span></th>
                                    <td><a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a></td>
                                    <td class="text-center fw-medium">18,456</td>
                                    <td class="text-center fw-medium">$2.40</td>
                                </tr>
                                <!-- Additional rows can be added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional content can be added here -->

    </div> <!-- End of row -->
</div> <!-- End of container -->

@endsection
