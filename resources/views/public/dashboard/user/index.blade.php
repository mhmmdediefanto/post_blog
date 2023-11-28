@extends('public.dashboard.layouts.main')
@section('container')
    <h2 class="mb-4">List User</h2>

    <div class="row">
        @if (session()->has('success'))
            <div class="col-md-9">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        @endif
    </div>
    <hr>
    <div class="row mt-2">
        <div class="col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Users</th>
                        <th scope="col">Is Admin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->is_admin }}</td>
                            <td>
                                <a href="/dashboard/user/{{ $user->username }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square "></i></a>
                                <form action="/dashboard/user/{{ $user->username }}" method="post" style="display: inline">
                                    @method('delete')
                                    @csrf
                                    <button name="submit" type="submit" onclick="return confirm('yakin mau hapus user?')"
                                        class="border-0 badge bg-danger"><i class="bi bi-trash-fill "></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
