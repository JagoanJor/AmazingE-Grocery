@extends('navbar')

@section('title','Account Maintenance')

@section('content')
    <div class="container d-flex justify-content-center">
        <table style="width: 50%; margin-top: 5%; margin-bottom: 10%;">
            <tr>
                <th style="text-align: center;">Account</th>
                <th style="text-align: center;">Action</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <?php foreach ($roles as $role) : ?>
                @if($user->role_id === $role->id)
                    <tr>
                        <td style="text-align: center; border: solid 1px;">{{ $user->fname }} {{ $user->lname }} - {{ $role->name }}</td>
                        <td style="text-align: center; border: solid 1px;"><a href="/updRole/{{ $user->id }}">Update Role</a> <a href="/deleteUser/{{ $user->id }}">Delete</a></td>
                    </tr>
                @endif
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>
@endsection