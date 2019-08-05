<nav class="navbar navbar-expand-lg navbar-dark indigo" >
        <a class="navbar-brand" href="/">Emprendimiento Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
          aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('educación') || request()->is('educación/*'))  ? 'active' : '' }}">
              <a class="nav-link" href="{{route('educación')}}"><i class="fas fa-book text-white"></i>Educación </a>
            </li>
            <li class="nav-item {{ (request()->is('medioAmbiente') || request()->is('medioAmbiente/*'))  ? 'active' : '' }}">
              <a class="nav-link " href="/medioAmbiente"><i class="fas fa-tree text-white"></i>Medio Ambiente</a>
            </li>
            <li class="nav-item {{ (request()->is('salud') || request()->is('salud/*'))  ? 'active' : '' }}">
              <a class="nav-link " href="/salud"><i class="fas fa-prescription-bottle-alt text-white"></i>Salud</a>
            </li>
            <li class="nav-item {{ (request()->is('comunitario') || request()->is('comunitario/*'))  ? 'active' : '' }}">
                <a class="nav-link" href="/comunitario"><i class="far fa-handshake text-white"></i>Comunitario</a>
            </li>
            <li class="nav-item {{ (request()->is('innovación') || request()->is('innovación/*'))  ? 'active' : '' }}">
                <a class="nav-link" href="/innovación"><i class="fas fa-flask text-white"></i>Innovación</a>
            </li>
            <li class="nav-item {{ (request()->is('divulgación') || request()->is('divulgación/*'))  ? 'active' : '' }}">
                <a class="nav-link " href="/divulgación"><i class="fas fa-microphone-alt text-white"></i>Divulgación</a>
            </li>
            <li class="nav-item {{ (request()->is('arte') || request()->is('arte/*'))  ? 'active' : '' }}">
                <a class="nav-link" href="arte"><i class="fas fa-image text-white"></i>Arte</a>
            </li>
            
          </ul>

          <ul class="nav justify-content-end ">
                @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                    <a class="nav-link text-white" href="{{ url('/home') }}">Panel de usuario</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('register') }}">Registrar</a>
                  @endif
                  @endauth
                  @endif
              </ul>

</nav>
          

      <!--
      <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->