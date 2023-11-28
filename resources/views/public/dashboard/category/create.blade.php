@extends('public.dashboard.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-2">New Category</h3>
            <hr class="mb-4">
            <form action="/dashboard/category" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name Category</label>
                    <input type="text"
                        class="form-control @error('title')
                    is-invalid
                @enderror"
                        id="title" name="name" placeholder="Category.." autofocus value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug Category</label>
                    <input type="text"
                        class="form-control @error('slug')
                    is-invalid
                @enderror"
                        id="slug" name="slug" placeholder="Category.."  value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
