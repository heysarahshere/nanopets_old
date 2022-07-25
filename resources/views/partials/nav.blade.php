<div class="banner ombre-nav col-12">
    <div class="row align-items-center py-2 justify-content-end">
        @if(Auth::check())
            <?PHP $user = Auth::user(); ?>
            <p class="nav-account">Welcome, {{$user->username}}!</p>
            <a class="nav-link nav-account" href="#">settings</a>
            <form method="POST" action="{{route('sign-out')}}">{{ csrf_field() }}
                <button class="btn btn-sm rev-ombre-btn mr-2" type="submit">sign out</button>
            </form>
        @else
            <div class="col-12 text-right">
                <a class="btn btn-sm ombre-btn" href="{{route('sign-in')}}">sign in</a>
                <a class="btn btn-sm rev-ombre-btn" href="{{route('sign-up')}}">sign up</a>
            </div>
        @endif
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-light lower-nav">
    <a><img class="navbar-brand nav-logo pt-2" src="{{asset(('images/nanopets-logo.png'))}}"/></a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">about</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    store
                </a>
                <div class="dropdown-menu store-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#">foods & potions</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">creature eggs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">housing items</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">creatures</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">support</a>
            </li>
        </ul>
    </div>
</nav>
