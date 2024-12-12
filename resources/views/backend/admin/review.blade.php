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
                    <table class="table text-nowrap align-middle mb-0" id="review">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">Konser</th>
                                <th scope="col">User</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Review Date</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($reviews as $review)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $review->konser->nama_konser }}</td>
                                    <td>{{ $review->user->username }}</td>
                                    <td>
                                        <!-- Menampilkan Rating dalam Bentuk Bintang -->
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fa fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td>{{ $review->comment }}</td>
                                    <td>{{ $review->review_date }}</td>
                                    <td class="text-center">
                                        <a href="{{route('reviewDelete', $review->id_review)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
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
            $('#review').DataTable();
        });
    </script>

@endsection
