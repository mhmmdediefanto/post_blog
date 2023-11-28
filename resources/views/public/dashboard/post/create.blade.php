@extends('public.dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <h3 class="mb-4">Create New Post</h3>
            <hr>
            <form action="/dashboard/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text"
                            class="form-control @error('title')
                            is-invalid
                        @enderror"
                            id="title" name="title" placeholder="Title Post.." autofocus value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SLug Post</label>
                        <input type="text"
                            class="form-control @error('slug')
                            is-invalid
                        @enderror"
                            id="slug" name="slug" placeholder="Slug Post.." value="{{ old('slug') }}">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post Category</label>
                        <select
                            class="form-select @error('category_id')
                            is-invalid
                        @enderror"
                            name="category_id" aria-label="Default select example">
                            <option selected>Select Post Category</option>
                            @foreach ($categories as $category)
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('categroy_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Cover Post</label>
                        <img src="" class="img-fluit mb-3" id="img-priview" alt="">
                        <input
                            class="form-control @error('image')
                            is-invalid
                        @enderror"
                            name="image" type="file" id="image" onchange="priviewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body Post</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Save Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
