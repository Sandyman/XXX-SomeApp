@extends('layouts.app')

@section('title')
    | Users | Edit
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Users</h1>
                <h2>Edit User</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url('/user/'.$user->id)}}" method="POST" name="editUser">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Nickname / Display Name</label>
                        <input type="text" class="form-control"
                               id="name"
                               name="name"
                               aria-describedby="nameHelp"
                               placeholder="Enter Display Name or Nickname"
                               value="{{ old('company_name') ?? $user->name }}">
                        <small id="nameHelp"
                               class="form-text text-muted">
                            Full company name.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email"
                               aria-describedby="nameHelp" placeholder="Enter User eMail"
                               value="{{ old('email') ?? $user->email }}">
                        <small id="emailHelp" class="form-text text-muted">
                            Enter the user's eMail address.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="password">Company Headquarters</label>
                        <input type="text" class="form-control"
                               id="password"
                               name="password"
                               aria-describedby="passwordHelp"
                               placeholder="Enter Password" />
                        <small id="passwordHelp"
                               class="form-text text-muted">
                            Enter a password that is at least 6 characters long. Password
                            must include one capital letter, one number and one symbol.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="text" class="form-control"
                               id="confirmPassword"
                               name="confirm_password"
                               aria-describedby="confirmPasswordHelp"
                               placeholder="Enter Company Headquarters" />
                        <small id="confirmPasswordHelp"
                               class="form-text text-muted">
                            Enter a password that is at least 6 characters long. Password
                            must include one capital letter, one number and one symbol.
                        </small>
                    </div>



                    <div class="form-group">
                        <label for="submit"> </label>
                        <button type="submit" class="btn btn-primary"
                                id="submit"
                                name="submit"
                                aria-describedby="submitHelp">
                            Save
                        </button>
                        <small id="submitHelp"
                               class="form-text text-muted">
                            Save the details.
                        </small>
                    </div>

                </form>
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


@section('footer')
    <script src="https://unpkg.com/@trevoreyre/autocomplete-js"></script>

    <script type="text/javascript">

        var path = "{{ url('/industry/autocomplete') }}";

        const autoComp = new Autocomplete('#autocomplete', {
            search: searchText => {
                const url = `${path}/${encodeURI(searchText)}`
                return new Promise(resolve => {
                    if (searchText.length < 2) {
                        return resolve([])
                    }
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            resolve(data)
                        })
                })
            },
            getResultValue: result => result.name,
        })

    </script>
    @endsection
