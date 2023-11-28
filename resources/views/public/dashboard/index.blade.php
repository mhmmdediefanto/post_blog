@extends('public.dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="col shadow pt-4 pb-2">
            <h2>Welcome <span class="text-secondary">{{ auth()->user()->name }}</span></h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="card shadow-sm col-md-3 text-dark me-3 mb-3 p-2">
            <a href="" class="text-decoration-none text-dark">
                <div class="row justify-content-arround d-flex">
                    <div class="col-md-6">
                        <p class="fs-5">Post</p>
                    </div>
                    <div class="col-md-6 text-warning badge">
                        <i class="bi bi-file-post fs-3 "></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="fs-5 text-decoration-none">{{ $posts->count() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class=" fs-6 text-decoration-none">Total Postingan</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="card shadow-sm col-md-3 text-dark me-3 mb-3 p-2">
            <a href="" class="text-decoration-none text-dark">
                <div class="row justify-content-arround d-flex">
                    <div class="col-md-6">
                        <p class="fs-5">Category</p>
                    </div>
                    <div class="col-md-6 badge text-success">
                        <i class="bi bi-tags-fill fs-3"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="fs-5 text-decoration-none">{{ $categories->count() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class=" fs-6 text-decoration-none">Total Category</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
