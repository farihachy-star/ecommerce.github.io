<div class="navbar_div mb-5">

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="{{ route ('index') }}"><img src="{{ asset('img/Go Fresh Logo.png') }}"
          alt="imgg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route ('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route ('Products') }}">Products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent)
              <a href="#main-{{ $parent->id }}" class="dropdown-item" data-toggle="collapse">
                <img src="{!! asset('img/' .$parent->image)!!}" width="20">
                {{ $parent->name}}
              </a>

              <div class=" collapse" id="main-{{ $parent->id }}">
                <div class="child">
                  @foreach (App\Models\Category::orderBy('name','asc')->where('parent_id', $parent->id)->get() as
                  $child)
                  <a href="#main-{{ $child->id }}" class="dropdown-item">
                    <img src="{!! asset('img/' .$child->image)!!}" width="20">
                    {{ $child->name}}
                  </a>
                  @endforeach
                </div>
              </div>
              @endforeach

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Canpaign</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cart" href="/viewcart">Cart </a>
          </li>
          <li class="nav-item">
            <form class="d-flex" action="{!! route('search') !!}" method="get">
              <input class="form-control me-2 input_custom " type="search" name="search" placeholder="Search Item"
                aria-label="Search">
              <button class="btn btn-outline-success button_custom" type="submit">Search</button>
            </form>
          </li>


        </ul>
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>

      </div>
    </div>
  </nav>

</div>