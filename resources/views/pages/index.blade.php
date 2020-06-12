@extends('layouts.app')

@section('title')
    | Home
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <h1 class="card-header bg-primary text-light">Welcome</h1>
                    <div class="card-body">
                        <p>Welcome to <strong class="text-primary">
                                {{ config('app.name', 'Laravel') }}
                            </strong>.</p>
                        <p>
                            This is a demonstration application for use by Diploma of
                            Software Development (and other) students for testing the
                            deployment of a web based application and API to the cloud.
                        </p>
                        <p>This application contains the following features:</p>
                        <ul>
                            <li>Basic Authentication</li>
                            <li>Simple API</li>
                            <li>Contact Page</li>
                            <li>About Page</li>
                            <li>...</li>
                        </ul>
                        <p>More details in the about page.</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        <small>Requirements</small>
                    </h1>
                    <div class="card-body">
                        <p>This application is built using or requires:</p>
                        <ul>
                            <li>PHP 7.3+</li>
                            <li>MariaDB 10.2+ / MySql 8+</li>
                            <li>Laravel 7+</li>
                            <li>NPM</li>
                            <li>Apache 2.4+</li>
                            <li>...</li>
                        </ul>
                        <p>More details in the about page.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
