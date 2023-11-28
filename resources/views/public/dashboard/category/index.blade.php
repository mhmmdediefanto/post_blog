@extends('public.dashboard.layouts.main')
@section('container')
<h2 class="mb-4">List Category</h2>

<div class="row">
    @if (session()->has('success'))
    <div class="col-md-9">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    </div>
    @endif
</div>
<div class="row">
    <div class="col-md-4">
        <a href="/dashboard/category/create" class="btn btn-primary text-decoration-none">Tambah Category</a>

    </div>
</div>
<div class="row mt-2">
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/category/{{ $category->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square "></i></a>
                        <form action="/dashboard/category/{{ $category->slug }}" method="post" style="display: inline">
                            @method('delete')
                            @csrf
                            <button name="submit" type="submit" onclick="return confirm('yakin mau hapus category?')" class="border-0 badge bg-danger"><i class="bi bi-trash-fill "></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
