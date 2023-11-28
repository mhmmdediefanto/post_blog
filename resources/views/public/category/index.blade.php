@extends('public.layouts.main')

@section('cardNewsSidebar')
<h2 class="text-primary mb-4">Post Category : {{ $category }}</h2>
    @foreach ($categories as $featur)
        <div class="col-lg-9">
            <div class="d-flex align-items-center mb-3 bg-white" style="height: 110px;">
                <img class="img-fluid" src="{{ asset('storage/'. $featur->image) }}" alt=""
                    style="object-fit: cover;width:80px;height:100%">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                            href="">{{ $featur->name }}</a>
                        <a class="text-body" href=""><small> {{ $featur->created_at->diffForHumans() }}
                            </small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="/post/{{ $featur->slug }}"
                        style="max-width: 100%; overflow:hidden">
                        {{ $featur->title }}</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
