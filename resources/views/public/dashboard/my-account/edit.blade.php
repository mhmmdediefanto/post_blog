@extends('public.dashboard.layouts.main')
@section('container')
    @if (session()->has('message'))
        <div class="col-md-9">
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="col-md-9">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <input type="hidden" name="passwordOldHidden" value="{{ $user->password }}">
    <div class="container-xl px-4">
        <form action="/dashboard/my-account/{{ $user->username }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0 ">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2 "
                                src="{{ asset('storage/' . $user->profilImage) }}" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">file gambar maximal 3 MB</div>
                            <!-- Profile picture upload button-->
                            <input
                                class="btn btn-primary @error('profilImage')
                                is-invalid
                            @enderror"
                                name="profilImage" type="file"></input>
                            @error('profilImage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="hidden" name="oldProfilImage" value="{{ $user->profilImage }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputfullname">FullName </label>
                                    <input
                                        class="form-control @error('name')
                                        is-invalid
                                    @enderror"
                                        name="name" id="inputfullname" type="text" placeholder="Enter your fullname"
                                        value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Form Row-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Username </label>
                                    <input
                                        class="form-control @error('username')
                                        is-invalid
                                    @enderror"
                                        name="username" id="inputUsername" type="text" placeholder="Enter your usernmae"
                                        value="{{ $user->username }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input
                                            class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                            name="email" id="inputEmailAddress" type="email"
                                            placeholder="Enter your email address" value="{{ $user->email }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Form Group (location name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Location</label>
                                        <input
                                            class="form-control @error('alamat')
                                            is-invalid
                                        @enderror"
                                            name="alamat" id="inputLocation" type="text"
                                            placeholder="Enter your Location" value="{{ $user->alamat }}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input
                                            class="form-control @error('phone')
                                            is-invalid
                                        @enderror"
                                            name="phone" id="inputPhone" type="tel"
                                            placeholder="Enter your phone number" value="{{ $user->phone }}">
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input
                                            class="form-control @error('birthday')
                                            is-invalid
                                        @enderror"
                                            id="inputBirthday" type="date" name="birthday"
                                            placeholder="Enter your birthday" value="{{ $user->birthday }}">
                                        @error('birthday')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Form Group (passwordOld)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputPasswordOld">Password Old </label>
                                    <input
                                        class="form-control @error('password')
                                        is-invalid
                                    @enderror"
                                        name="password" id="inputPasswordOld" type="password"
                                        placeholder="Enter your passowrdOld" value="">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Form Group (PasswordNew)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputPasswordNew">Password New </label>
                                    <input
                                        class="form-control @error('passwordNew')
                                        is-invalid
                                    @enderror"
                                        name="passwordNew" id="inputPasswordNew" type="password"
                                        placeholder="Enter your passowrd new" value="">
                                    @error('passwordNew')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Form Group (confirmpassword)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputPasswordNew">Confirm Password </label>
                                    <input
                                        class="form-control @error('confirmPasword')
                                        is-invalid
                                    @enderror"
                                        name="confirmPasword" id="inputconfirmPasword" type="password"
                                        placeholder="Enter your passowrd new" value="">
                                    @error('confirmPasword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
