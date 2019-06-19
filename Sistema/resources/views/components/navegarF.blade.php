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
            <a class="nav-link" href="/fornecedor/{{$id}}" style="font-size: 20px">Minhas informações</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Avaliações</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px">Histórico</a>
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

          @endauth
        </ul>
      </div>
      @endif
    </div>
  </nav>