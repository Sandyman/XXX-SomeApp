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
