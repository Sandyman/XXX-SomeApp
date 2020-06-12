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
                        About
                    </h1>
                    <div class="card-body">
                        <h2>The App</h2>
                        <p>The CEO Squad has two components:</p>
                        <ul>
                            <li>Simple Web Application</li>
                            <li>Simple RESTful API</li>
                        </ul>
                        <h2 class="border-top mt-4 py-2">Demonstration Accounts</h2>
                        <h3>Administration</h3>
                        <dl>
                            <dt>eMail</dt>
                            <dd class="text-code">admin.user@l7api.test</dd>
                            <dt>Password</dt>
                            <dd class="text-code">Password1</dd>
                        </dl>
                        <h3>User Account</h3>
                        <dl>
                            <dt>eMail</dt>
                            <dd class="text-code">chip.munk@l7api.test</dd>
                            <dt>Password</dt>
                            <dd class="text-code">Secret1</dd>
                        </dl>
                        <p>Other accounts are also available. There are two accounts for
                            staff added, plus a place for the student to add their own
                            account details for development and testing.</p>
                        <p>Adrian uses "<a href="https://usehelo.com/">HELO</a>" (approx
                            A$24 personal, A$48 professional) as a mail trap desktop application
                            to allow testing of sending eMail from within this demo app.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        Interfaces
                    </h1>
                    <div class="card-body">
                        <h2>Web Interface</h2>
                        <p>For the first version of the application the web interface
                            is:</p>
                        <ul>
                            <li>based on HTML, CSS, JavaScript <br>
                                <em>(with possibly some jQuery)</em>,
                            </li>
                            <li>Starts the DRY process by refactoring some repeated items
                                into Laravel components <br>
                                <em>(eg NavBar)</em>,
                            </li>
                            <li>Has a search that will look through the CEOs <em> <br>
                                    (need to be logged into the application)</em>,
                            </li>
                            <li>Provides an autocomplete for the Industry area on CEO add
                                and edit forms,
                            </li>
                            <li>Provides Login, Logout, Registration and Password Recovery
                                for users,
                            </li>
                            <li>more ... possibly.</li>
                        </ul>

                        <h2 class="border-top mt-4 py-2">API</h2>
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

            <div class="col-md-6 col-xs-12 mb-4">
                <div class="card">
                    <h1 class="card-header bg-secondary text-light">
                        Colours
                    </h1>
                    <div class="card-body">
                        <p>The colours selected are:</p>
                        <ul class="list-unstyled text-center text-capitalize">
                            <li class="m-1 p-2 bg-primary text-light">
                                <b>primary</b>
                            </li>
                            <li class="m-1 p-2 bg-secondary">
                                <b>secondary</b>
                            </li>
                            <li class="m-1 p-2 bg-success">
                                <b>success</b>
                            </li>
                            <li class="m-1 p-2 bg-danger">
                                <b>danger</b>
                            </li>
                            <li class="m-1 p-2 bg-info">
                                <b>info</b>
                            </li>
                            <li class="m-1 p-2 bg-warning">
                                <b>warning</b>
                            </li>
                            <li class="m-1 p-2 bg-light">
                                <b>light</b>
                            </li>
                            <li class="m-1 p-2 bg-dark text-light">
                                <b>dark</b>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
