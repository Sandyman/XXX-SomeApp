@extends('layouts.app')

@section('title')
    | Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        About this App
                    </h1>
                    <div class="card-body">
                        <p>The CEO Squad has two components:</p>
                        <ul>
                            <li>Simple Web Application</li>
                            <li>Simple RESTful API</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        Quote of the Moment
                    </h1>
                    <div class="card-body">
                        <p class="text-secondary">{{ $quote }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        Web Interface
                    </h1>
                    <div class="card-body">
                        <p>For the first version of the application the web interface
                            is:</p>
                        <ul>
                            <li>HTML, CSS, and jQuery based</li>
                            <li>Starts the DRY process by refactoring some repreated items
                                into
                                Laravel components
                            </li>
                            <li>Has a search that will look through the CEOs</li>
                            <li>Provides an autocomplete for the Industry area on the add
                                and
                                edit
                                forms
                            </li>
                            <li>Provides Login, Logout, Registration and Password Recovery
                                for
                                users
                            </li>
                            <li>...</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        RESTful API
                    </h1>
                    <div class="card-body">
                        <p>This application has a basic API as an example of:</p>
                        <ul>
                            <li>Using Laravel Passport for Authentication</li>
                            <li>User Registration</li>
                            <li>Log in</li>
                            <li>Log out</li>
                            <li>...</li>
                        </ul>
                        <p>As time permits the API will be extended to include:</p>
                        <ul>
                            <li>CEO Create, Read, Update and Delete operations</li>
                            <li>Other features as they become evident</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
