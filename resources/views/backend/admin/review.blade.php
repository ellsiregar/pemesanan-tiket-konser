@extends('backend.admin.layouts.app')

@section('title', 'Review')

@section('content')

<div class="col-lg-12">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">review</h5>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">id tiket</th>
                            <th scope="col">konser</th>
                            <th scope="col">user</th>
                            <th scope="col">rating</th>
                            <th scope="col">comment</th>
                            <th scope="col">review date</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($reviews as $review)
                        <tr>
                            <th scope="row">{{  $loop->iteration }}</th>
                            <td>{{ $review->tiket->id_konser}}</td>
                            <td>{{ $review->users->users_id}}</td>
                            <td>{{ $review->rating}}</td>
                            <td>{{ $review->comment}}</td>
                            <td>{{ $review->riview_date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
