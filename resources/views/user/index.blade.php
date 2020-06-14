@extends('layouts.app')

@section('title')
    | Users
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Users</h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            <a href="{{ route('user.create') }}"
                               class="btn btn-outline-primary">
                                Add
                            </a>
                        </th>
                        <th colspan="4">
                            <form action="/user"
                                  method="get"
                                  role="search"
                                  class="form-inline float-right">
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control"
                                           name="term"
                                           placeholder="Search Users"
                                           value="{{ $term ?? ''}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary"
                                                type="submit">Search
                                        </button>
                                        <a class="btn btn-outline-secondary"
                                           href="{{route('user.index')}}"
                                           type="button">Clear</a>
                                    </div>
                                </div>

                            </form>

                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Nickname</th>
                        <th>eMail</th>
                        <th>Validated</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center"> @if( $user->email_verified_at )
                                <i class="fas fa-check">
                                    <span class="sr-only">Verified</span>
                                </i>
                                @endif
                            </td>
                            <td class="text-right">
                                <form action="{{route('user.destroy',$user->id)}}"
                                      method="POST">
                                    <div class="btn-group">
                                    <a class="btn btn-info px-4"
                                       href="{{ route('user.show', $user->id)}}">
                                        <i class="far fa-eye"></i>
                                        <span class="sr-only">Details</span></a>
                                    <a class="btn btn-secondary px-4"
                                       href="{{ route('user.edit',$user->id) }}">
                                        <i class="fas fa-pen"></i>
                                        <span class="sr-only">Edit</span>
                                    </a>
                                    <button type="submit" class="btn btn-danger px-3">
                                        <i class="fas fa-times"></i>
                                        <span class="sr-only">Delete</span>
                                    </button>
                                    </div>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            {{ $users->links() }}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            @if (auth())
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header bg-dark text-light"><small>Profile</small></h1>
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                You are logged in!
                            </div>
                                <p>Hello, {{ $currentUser->name}}</p>
                                <p>You last logged in at: TODO LOGIN TIMES</p>
                                <img
                                    src="{{ asset('/images/avatars/'.$currentUser->profile->photograph) }}"
                                    class="card-img"                                     />
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
