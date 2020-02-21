<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ action('HomeController@index') }}">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active px-3">

                    <a class="nav-link" href="{{ action('HomeController@index') }}">Home </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="">Services <span class="sr-only">(current)</span></a>
                </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="">Contact Us <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link" href="">Privacy Policy <span class="sr-only">(current)</span></a>
            </li>


        </ul>


                <li class="nav-item dropdown text-muted">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

    </div>
</nav>
