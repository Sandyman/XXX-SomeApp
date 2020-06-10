@extends('layouts.app')

@section('title')
    | CEOs
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>CEOs</h1>
                <h2>Add New CEO</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url('/ceo')}}" method="POST" name="createCEO">
                    @csrf

                    <div class="form-group">
                        <label for="name">Email address</label>
                        <input type="text" class="form-control" id="name" name="name"
                               aria-describedby="nameHelp" placeholder="Enter CEO name">
                        <small id="nameHelp" class="form-text text-muted">
                            Enter full name of the CEO.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="companyName">Email address</label>
                        <input type="text" class="form-control"
                               id="companyName"
                               name="company_name"
                               aria-describedby="companyNameHelp"
                               placeholder="Enter Company Name">
                        <small id="companyNameHelp"
                               class="form-text text-muted">
                            Full company name.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Year Start</label>
                        <select class="form-control" id="year" name="year"
                                aria-describedby="yearHelp" placeholder="Enter year">
                            @foreach($years as $year)
                                <option value="{{$year}}"
                                        @if($year==$thisYear) selected @endif>
                                    {{$year}}
                                </option>
                            @endforeach
                        </select>
                        <small id="yearHelp" class="form-text text-muted">
                            Year the CEO started in the position.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="companyName">Company Headquarters</label>
                        <input type="text" class="form-control"
                               id="companyHQ"
                               name="company_headquarters"
                               aria-describedby="companyHQHelp"
                               placeholder="Enter Company Name">
                        <small id="companyHQHelp"
                               class="form-text text-muted">
                            Location of the Headquarters.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="companyName">Industry Area</label>
                        <input type="text" class="form-control typeahead"
                               id="companyIndustry"
                               name="what_company_does"
                               aria-describedby="companyIndustryHelp"
                               placeholder="Enter Company Name">
                        <small id="companyIndustryHelp"
                               class="form-text text-muted">
                            What the company does/products/etc.
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

    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
@endsection
