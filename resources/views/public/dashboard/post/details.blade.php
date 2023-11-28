@extends('public.dashboard.layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-9 mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top" alt="...">
            </div>
            <div class="body">
                <div class="row">
                    <div class="col">
                        <h1 class="card-title">{{ $posts->title }}</h1>
                        <p>By :<a href="#" class="text-decoration-none text-center">
                                {{ $posts->user->name }}</a> Content is
                            <a href="#" class="text-decoration-none text-center">{{ $posts->category->name }}</a>
                            <span><small class="text-secondary">18 minutes age</small></span>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <a href="/dashboard/post" class="btn btn-success"><i
                                            class="bi bi-box-arrow-left me-1"></i><span>Back to all my post</span></a>
                                    <a href="/dashboard/post/{{ $posts->slug }}/edit" class="btn btn-warning"><i
                                            class="bi bi-pencil-square me-1"></i><span>Edit</span></a>
                                    <form action="/dashboard/post/{{ $posts->slug }}" method="post"
                                        style="display: inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-danger text-light"><i
                                                class="bi bi-trash-fill m1-1"></i><span>Delete</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <article class="my-3 fs-6 text-justify">
                            {!! $posts->body !!}
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
