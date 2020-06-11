@extends('layouts.app')

@section('title')
    | CEOs
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>CEOs</h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            <a href="{{ route('ceo.create') }}" class="btn btn-outline-primary">
                                Add
                            </a>
                        </th>
                        <th colspan="4">
                            <form action="/ceo"
                                  method="get"
                                  role="search"
                                  class="form-inline float-right">
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control"
                                           name="term"
                                           placeholder="Search CEOs"
                                           value="{{ $term ?? ''}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary"
                                                type="submit">Search</button>
                                        <a class="btn btn-outline-secondary"
                                           href="{{route('ceo.index')}}"
                                           type="button">Clear</a>
                                    </div>
                                </div>

                            </form>

                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>CEO</th>
                        <th>Company</th>
                        <th>Year</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ceos as $ceo)
                        <tr>
                            <td>{{ $ceo->id }}</td>
                            <td>{{ $ceo->name }}</td>
                            <td>{{ $ceo->company }}</td>
                            <td>{{ $ceo->year }}</td>
                            <td class="text-right">
                                <form action="{{route('ceo.destroy',$ceo->id)}}" method="POST">
                                    <a class="btn btn-info mr-2"
                                       href="{{ route('ceo.show', $ceo->id)}}">
                                        <i class="far fa-eye"></i> Details</a>
                                    <a class="btn btn-warning mr-2"
                                       href="{{ route('ceo.edit',$ceo->id) }}">
                                        <i class="fas fa-pen"></i> Edit</a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-times"></i> Delete
                                    </button>
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
                            {{ $ceos->links() }}
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
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
