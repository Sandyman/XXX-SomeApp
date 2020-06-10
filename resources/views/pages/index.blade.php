@extends('layouts.app')

@section('title')
    | Home
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header bg-primary text-light">Welcome</h1>
                    <div class="card-body">
                        <p>Welcome to .</p>
                        <p>This is a demonstration application for use by students in deployment
                            testing. Deployment targets must meet the requirements for the
                            application, or be configurable with ease.
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

            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        <small>Requirements</small>
                    </h1>
                    <div class="card-body">
                        <p>This application is built using or requires:</p>
                        <ul>
                            <li>PHP 7.3+</li>
                            <li>MariaDB 10.2+ / MySql 8</li>
                            <li>Laravel 7</li>
                            <li>NPM</li>
                            <li>Composer</li>
                            <li>Composer</li>
                            <li>Composer</li>
                            <li>Composer</li>
                        </ul>
                        <p>More details in the about page.</p>
                    </div>
                </div>
            </div>

                <div class="col-md-4">
                    {{ $quote }}
                </div>

        </div>
    </div>
@endsection
