 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Uzklausu portalas</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link text-light" href="/">Home</a></li>
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()['name']}}</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center" href="/logout">Logout</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                        <li><a href="/login" class="nav-link">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
