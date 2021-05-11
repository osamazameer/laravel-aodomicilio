<nav class="navbar navbar-expand-lg navbar-dark" style="background:#9e0000 !important;color:white !important;">
  <a class="navbar-brand" href="#">Aodomicilio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">


    {{-- Left Side --}}
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('store') }}">Store <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('ship-now') }}">Ship Now<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('track') }}">Track<span class="sr-only">(current)</span></a>
      </li>


      {{-- TODO: Remove this from main nav --}}
      <li class="nav-item dropdown">
        @auth
        <a class="nav-link" href="{{ route('product') }}">
          Admin
        </a>
        @endauth

      </li>
    </ul>

    {{-- Right Side --}}
    <ul class="navbar-nav">
      @auth
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('register') }} ">{{auth()->user()->name}}</a>
      </li>
      <li class="nav-item">
        <form action=" {{ route('logout') }} " method="post">
          @csrf
          <button class="nav-link" type="submit">Logout</button>
        </form>
      </li>
      @endauth

      @guest
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('register') }} ">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('login') }} ">Login</a>
      </li>
      @endguest
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>

<style>
  .bg-mattBlackLight {
    background-color: #303337;
  }

  .text-mattBlackLight {
    color: #303337;
  }

  .bg-mattBlackDark,
  body,
  .nav-link:hover,
  .nav-link.active {}

  .text-mattBlackDark {
    color: #212121;
  }

  .bg-mattGray {
    background-color: #878d8d;
  }

  .text-mattGray,
  body,
  .nav-link .icon,
  .nav-link .text {
    color: #878d8d;
  }

  .bg-mattRed {
    background-color: #ec6271;
  }

  .text-mattRed,
  .nav-link:hover .icon,
  .nav-link:hover .text,
  .nav-link.active .icon,
  .nav-link.active .text {
    color: #ec6271;
  }

  * {
    font-family: 'Poppins', sans-serif;
  }

  body {
    height: 1000px;
  }

  .wrapper {
    margin-top: 3.5rem;
  }

  .wrapper .sideMenu {
    position: fixed;
    top: 0;
    bottom: 0;
    margin: 3.5rem auto auto;
    left: 0;
    width: 12.5rem;
    -webkit-transition: all ease 0.25s;
    transition: all ease 0.25s;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    z-index: 2000;
  }

  .wrapper .content {
    width: 100%;
    margin-left: 0rem;
    -webkit-transition: all ease 0.25s;
    transition: all ease 0.25s;
  }

  .wrapper.active .sideMenu {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  .nav-link {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: block;
    white-space: nowrap;
  }

  .nav-link .icon {
    margin-right: 0.25rem;
    font-size: 1.875rem;
    vertical-align: middle;
    height: 2rem;
    width: 2rem;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .nav-link .text {
    font-size: 0.875rem;
  }

  @media (min-width: 992px) {
    .wrapper .sideMenu {
      -webkit-transform: translateX(0);
      transform: translateX(0);
    }

    .wrapper .content {
      margin-left: 12.5rem;
    }

    .wrapper.active .sideMenu {
      width: 5rem;
    }

    .wrapper.active .sideMenu .nav-link {
      text-align: center;
    }

    .wrapper.active .sideMenu .nav-link .icon {
      margin-right: 0;
    }

    .wrapper.active .sideMenu .nav-link .text {
      display: none;
    }

    .wrapper.active .content {
      margin-left: 5rem;
    }
  }
</style>