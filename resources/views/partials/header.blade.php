 <header>
        <nav id="navbar-example3" class="navbar navbar-expand-lg navbar-dark" style="background-color:#d0c0f8;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="/" id="titre">Rameurs Tricolores Donations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" ></ul>
                    <span class="navbar-text">  <li class="nav-item dropdown" style="list-style: none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <img src="{{URL('images/compte.png')}}" id="imageCompte">
                    </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="min-width: 0;">
                                @if (Route::has('login'))
                                    @auth
                                        <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                            <li><a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault();
                                            this.closest('form').submit();" style="color: black;">Déconnecter</a> </li>
                                        </form>
                                    @else
                                        <li><a class="dropdown-item" href="{{ route('login') }}" style="color: black;">Connexion</a></li>
                                        @if (Route::has('register'))
                                            <li><a class="dropdown-item" href="{{ route('register') }}" style="color: black;">Inscription</a></li>
                                        @endif
                                    @endauth
                                @endif

                            </ul>
                </span>
                </div>
            </div>
        </nav>
 </header>



