@extends('navbar')

@section('title','Register')

@section('content')
    <div class="container d-flex justify-content-center mt-5 mb-5">
        <div class="card register mb-3">
            <div class="card-header"><h1>Register</h1></div>
            <div class="card-body mt-3">
                <form class="justify-content-center" action="/register" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" id="fname" required value="{{ old('fname') }}">
                                @error('fname')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" id="lname" required value="{{ old('lname') }}">
                                @error('lname')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Role</label>
                                <div>
                                    <select class="selectpicker form-control @error('role_id') is-invalid @enderror" name="role_id" id="role_id" required value="{{ old('role_id') }}">
                                        <option selected disabled value="">Choose Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                    @error('role_id')
                                        <div class="invalid-tooltip">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-radio mb-3 position-relative">
                                <label class="form-label">Gender</label>
                                <div class="form-radio-item @error('gender_id') is-invalid @enderror">
                                    <input type="radio" name="gender_id" id="male" value="1">
                                    <label for="male">Male</label>
                                    <span class="check"></span>
                                    <input type="radio" name="gender_id" id="female" value="2">
                                    <label for="female">Female</label>
                                    <span class="check"></span>
                                </div>
                                @error('gender_id')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Display Picture</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                @error('password')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 position-relative">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="Confirmpassword" class="form-control @error('Confirmpassword') is-invalid @enderror" id="Confirmpassword">
                                @error('Confirmpassword')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-1">
                        <button type="submit" class="btn">Register</button>
                    </div>
                    <div class="mt-3 d-flex justify-content-center pt-2">
                        Already have an account? <a href="/login">Click here to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection