@extends('layouts.app')

@section('title')
    | CEOs
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>CEOs</h1>
                <p>
                    <a href="{{ route('ceo.create') }}" class="btn btn-outline-primary">
                        Add
                    </a>
                </p>

                <dl class="row">
                    <dt class="col-md-3">ID</dt>
                    <dd class="col-md-9">{{ $ceo->id ?? "INFO: Undefined" }}</dd>
                    <dt class="col-md-3">Name</dt>
                    <dd class="col-md-9">{{ $ceo->name  ?? "INFO: Undefined"}}</dd>
                    <dt class="col-md-3">Company</dt>
                    <dd class="col-md-9">{{ $ceo->company_name ?? "INFO: Undefined" }}</dd>
                    <dt class="col-md-3">Year</dt>
                    <dd class="col-md-9">{{ $ceo->year ?? "INFO: Undefined" }}</dd>
                    <dt class="col-md-3">HQ Location</dt>
                    <dd class="col-md-9">{{ $ceo->company_headquarters  ?? "INFO: Undefined"}}</dd>
                    <dt class="col-md-3">Industry</dt>
                    <dd class="col-md-9">{{ $ceo->what_company_does ?? "INFO: Undefined" }}</dd>
                </dl>

                <div class="mt-2">
                    <form action="{{route('ceo.destroy',$ceo->id)}}" method="POST">
                        <a class="btn btn-info"
                           href="{{ route('ceo.index')}}">Browse</a>
                        <a class="btn btn-primary"
                           href="{{ route('ceo.edit',$ceo->id) }}">Edit</a>
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
