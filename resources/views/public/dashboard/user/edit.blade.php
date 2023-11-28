@extends('public.dashboard.layouts.main');
@section('container')
    <h2 class="mb-3">halaman edit rules</h2>
    <br>
    <div class="row">
        <form action="/dashboard/user/{{ $user->username }}" method="post">
            @csrf
            @method('put')
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Pilih Rules</label>
                    <select class="form-select" aria-label="Default select example" name="is_admin">
                        <option selected>Open this select menu</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                      </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Rules</button>
                </div>
            </div>
        </form>
    </div>
@endsection