@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>
                
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td> <!-- implode, lai atdalitu,, ja lietotajam ir varakas lomas -->
                            <td>
                                <a href="{{ action('Admin\UserController@edit', $user->id) }}" class='float-left'>
                                    <button type="button" class='btn btn-primary btn-sm'>Edit</button>
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class='btn btn-danger btn-sm float-left'>DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection