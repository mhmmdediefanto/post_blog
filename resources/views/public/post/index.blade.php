@extends('public.layouts.main')

@section('container')
    <div class="row">
        @if ($posts->count())
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-md-2 p-2">
                            <img class="img-fluid rounded-start" src="{{ asset('storage/' . $post->image) }}" alt="">
                        </div>
                        <div class="col-md-9 p-2">
                            <a href="/post/{{ $post->slug }}"
                                class="fw-bold fs-5 text-decoration-none cursor-pointer">{{ $post->title }}</a>
                            <small>{{ $post->user->name }} <span class="text-primary">in</span>
                                {{ $post->category->name }}</small> <small>{{ $post->created_at->diffForHumans() }}</small>
                            <p>{{ $post->excerpt }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-md-8">
                <p class="fw-bold text-center text-danger">Post Not found🤣🤣🤣 <a class="text-decoration-none"
                        href="/">back to post</a></p>
            </div>
        @endif
        <div class="col-md-4 ">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
            </div>
            @foreach ($trading as $item)
                <div class="bg-white border border-top-0 p-3">
                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                        <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt=""
                            style="object-fit: cover;width:80px;height:100%">
                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                    href="">{{ $item->category->name }}</a>
                                <a class="text-body"
                                    href=""><small>{{ $item->created_at->diffForHumans() }}</small></a>
                            </div>
                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                href="/post/{{ $item->slug }}">{{ $item->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
