<nav class="navbar navbar-expand-lg navbar-dark indigo" >
        <a class="navbar-brand" href="/">Emprendimiento Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
          aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link " href="{{route('educación')}}">Educación </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/medioAmbiente">Medio Ambiente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/salud">Salud</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/comunitario">Comunitario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/innovación">Innovación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/divulgación">Divulgación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="arte">Arte</a>
            </li>
            
          </ul>

          <ul class="nav justify-content-end ">
                @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                    <a class="nav-link text-white" href="{{ url('/home') }}">Home</a>
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