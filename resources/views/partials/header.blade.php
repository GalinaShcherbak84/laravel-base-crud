{{-- {{Route::currentRouteName()}} {{Request::route()->getName()}} --}}
<nav class="nav mb-3 mt-3">
    <a class="nav-link @if(Route::currentRouteName()== 'home') active @endif" aria-current="page"
     href="{{route('home')}}">
      Home
    </a>
    <a class="nav-link @if(Route::currentRouteName()== 'comics.index') active @endif" 
      href="{{route('comics.index')}}">
      Comics
    </a>
  </nav>