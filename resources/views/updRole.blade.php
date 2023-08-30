@extends('navbar')

@section('title','Update Role')

@section('content')
    <div class="container" style="max-width: 50%; margin-top: 5%; margin-bottom: 20.3%;">
        <form action="/updateRole" method="POST">
            @csrf
            <div class="mb-3 position-relative">
                <label class="form-label">{{ $user->fname }} {{ $user->lname }}</label>
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
            <div class="d-flex justify-content-center mt-1">
                <input type="hidden" name="userID" value="{{ $user->id }}">
                <button type="submit" class="btn" style="background-color: #C8DF52;">Save</button>
            </div>
        </form>
    </div>
@endsection