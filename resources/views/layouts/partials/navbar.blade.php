<header>
  <div class="nav">
    <div style="display: flex; justify-content: space-between">
      <h1 class="title">
          <a href="/" style="text-decoration: none;">Ballooning</a>
      </h1>

      @auth
        {{auth()->user()->name}}
        <div class="item-container">
          <a class="nav-item" href="{{ route('logout.perform') }}">Logout</a>
        </div>
      @endauth

      @guest
        <div class="item-container">
          <a class="nav-item" href="{{ route('login.perform') }}">Login</a>
          <a class="nav-item" href="{{ route('register.perform') }}">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>