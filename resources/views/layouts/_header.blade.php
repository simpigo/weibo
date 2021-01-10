<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a href="{{ route('home') }}" class="navbar-brand">Weibo App</a>
    <ul class="navbar-nav justify-content-end">

      @if (Auth::check())
        <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
            <a class="dropdown-item" href="#">编辑资料</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="logout" href="#">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
            </a>
          </div>
        </li>
      @else
        <li class="nav-item">
          <a href="{{ route('help') }}" class="nav-link">帮助</a>
        </li>
        <li class="navbar-nav">
          <a href="{{ route('login') }}" class="nav-link">登录</a>
        </li>
      @endif

    </ul>
  </div>
</nav>
