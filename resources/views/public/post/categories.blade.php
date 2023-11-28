@extends('public.layouts.main')

@section('container')
    <div class="row">
        @foreach ($category as $categories)
            <div class="col-md-4 mt-5 mb-3">
                <a href="/post?category={{ $categories->slug }}" class="text-decoration-none">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data {{ $categories->name }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $categories->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
