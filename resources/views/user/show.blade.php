@extends('layouts.app')

@section('title')
    | Users
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Users</h1>
                <p>
                    <a href="{{ route('user.create') }}" class="btn btn-outline-primary">
                        Add
                    </a>
                </p>

                <dl class="row">
                    <dt class="col-md-4">ID</dt>
                    <dd class="col-md-8">
                        {{ $user->id ?? "INFO: Undefined" }}
                    </dd>
                    <dt class="col-md-4">Nickname / Display Name</dt>
                    <dd class="col-md-8">
                        {{ $user->name  ?? "INFO: Undefined"}}
                    </dd>
                    <dt class="col-md-4">eMail Address</dt>
                    <dd class="col-md-8">
                        {{ $user->email ?? "INFO: Undefined" }}
                    </dd>
                    <dt class="col-md-4">eMail Validated</dt>
                    <dd class="col-md-8">
                        {{ $user->email_validated_at ?? "NOT VALIDATED" }}
                    </dd>
                    <dt class="col-md-4">Given Name</dt>
                    <dd class="col-md-8">
                        {{ $user->profile->given_name  ?? "INFO: Undefined"}}
                    </dd>
                    <dt class="col-md-4">Family Name</dt>
                    <dd class="col-md-8">
                        {{ $user->profile->family_name  ?? "-"}}
                    </dd>
                    <dt class="col-md-4">Photograph</dt>
                    <dd class="col-md-8">
                        @if($user->profile->photograph)
                            <img class="img-thumbnail"
                                 width="128"
                                 src="{{ asset('images/avatars/'.$user->profile->photograph) }}"
                                 />
                        @endif
                        <br>{{ $user->profile->photograph ?? "INFO: Undefined" }}
                    </dd>
                </dl>

                <div class="mt-2">
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-info"
                           href="{{ route('user.index')}}">Browse</a>
                        <a class="btn btn-primary"
                           href="{{ route('user.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            <i class="far fa-delete"></i> Delete
                        </button>
                    </form>
                </div>
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
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
