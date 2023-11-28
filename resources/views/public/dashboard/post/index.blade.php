@extends('public.dashboard.layouts.main')
@section('container')
<h2 class="mb-4">My Post</h2>

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
    <div class="col-md-4"><a href="/dashboard/post/create" class="btn btn-primary text-decoration-none">Tambah Postingan</a></div>
</div>
<div class="row mt-2 pb-3">
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/post/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye-fill "></i></a>
                        <a href="/dashboard/post/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square "></i></a>
                        <form action="/dashboard/post/{{ $post->slug }}" method="post" style="display: inline">
                            @method('delete')
                            @csrf
                            <button name="submit" type="submit" onclick="return confirm('yakin mau hapus post anda?')" class="border-0 badge bg-danger"><i class="bi bi-trash-fill "></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
