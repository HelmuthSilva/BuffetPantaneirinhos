<nav class="navbar navbar-expand-lg navbar-secondary">
    <div class="container">

    <h5>Pantaneirinhos Buffet</h5>

      <div class="collapse navbar-collapse" id="navbarResponsive">

        @if (Route::has('login'))
        <ul class="navbar-nav ml-auto">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="/" style="font-size: 20px">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Meus orçamentos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Fazer orçamento</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Pacotes</a>
          </li>

          <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }} <span class="caret"></span>
               </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                    </form>
                </div>
            </li>

          @else
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Fazer orçamento</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Pacotes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" style="font-size: 20px">Entrar</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}" style="font-size: 20px">Cadastrar</a>
          </li>
          @endif
          @endauth
        </ul>
      </div>
      @endif
    </div>
  </nav>
