<div class="navbar">
    <div class="navbar-inner">
            <ul id="nav">
                    @if (Route::has('login'))
                            @auth
                                <div class="marginNav">
                       {{--     <li class="marginLi"><a href="{{url ('/welcome')}}">Home</a></li> --}}
                            <li><a href="{{url ('/total')}}">Totaal</a></li>
                            <li><a href="{{url ('/players')}}">Deelnamers</a></li>
                                </div>
                        @else
                            @endauth
                        @endif

                    <div class="scouting-info">
                        <li>
                        <h1>Scouting De Hoeve</h1>
                        </li>
                    </div>

                    <div  class="userAccount">
                    @if (Route::has('login'))
                        @auth
                                <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>                         @else
                                <div class="login-btn">
                    <li ><a href="{{ route('login') }}">Inloggen</a></li>
                                </div>
                        @endauth
                    @endif
                    </div>
                </ul>
</div>
</div>
