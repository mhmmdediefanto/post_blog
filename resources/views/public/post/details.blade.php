@extends('public.layouts.main')


@section('container')
    <div class="row ">
        <div class="col-md-8">
            <div class="card mb-3">
                <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top" style="height: 350px;">
            </div>
            <div class="body">
                <h4 class="card-title text-primary">{{ $posts->title }}</h4>
                <p>By :<a href="/post?author={{ $posts->user->slug }}" class="text-decoration-none text-center">
                        {{ $posts->user->name }}</a> Content is
                    <a href="/post?category={{ $posts->category->slug }}"
                        class="text-decoration-none text-center">{{ $posts->category->name }}</a>
                    <span><small class="text-secondary">{{ $datePost }}</small></span>
                </p>
                <div class="text-dark text-justify">
                    {!! $posts->body !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
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
    {{-- fitur comment --}}
    <div class="row">
        <div class="col-md-8">
            <h2>Comment Here</h2>
            <section>
                <div class="card">
                    <div class="card-body p-4 ">
                        <div class="d-flex flex-start w-100 bg-transparent">
                            @auth
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="{{ asset('storage/' . auth()->user()->profilImage) }}" alt="avatar" width="65"
                                    height="65" />
                            @else
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://getvideostream.com/img/reviews/review_02.jpg" alt="" width="65"
                                    height="65">
                            @endauth
                            <div class="w-100">
                                <form action="/comment" method="post">
                                    <h5>Add a comment</h5>
                                    <div class="form-outline">
                                        <textarea class="form-control" name="content" id="textAreaExample" rows="4" required></textarea>
                                        <label class="form-label" for="textAreaExample">What is your view?</label>
                                    </div>
                                    <div class="d-flex flex-end mt-1">
                                        @csrf
                                        <input type="hidden" name="slug" value="{{ $posts->slug }}">
                                        <input type="hidden" name="post_id" value="{{ $posts->id }}">
                                        <button type="submit" class="btn btn-primary">
                                            Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            {{-- Comment --}}
            <div class="my-3 py-3 text-dark">
                <div class="row d-flex ">
                    @foreach ($comments as $comment)
                        <div class="d-flex flex-start mb-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="{{ asset('storage/' . $comment->user->profilImage) }}" alt="avatar" width="65"
                                height="65" />
                            <div class="card w-100 bg-transparent">
                                <div class="card-body p-4">

                                    <h5>{{ $comment->user->name }}</h5>
                                    <p class="small">{{ $comment->created_at->diffForHumans() }}</p>
                                    <p>
                                        {{ $comment->content }}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <a href="#!" class="link-muted me-2"><i
                                                    class="fas fa-thumbs-up me-1"></i>132</a>
                                            <a href="#!" class="link-muted"><i
                                                    class="fas fa-thumbs-down me-1"></i>15</a>
                                        </div>
                                        <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>
                                            Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
