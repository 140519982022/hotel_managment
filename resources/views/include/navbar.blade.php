<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('home_page')}}">Home</a></li>
      @auth 
      <li><a href="{{route('user_edit')}}">Edit Profile</a></li>
      @endauth
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @guest 
    <!-- before login you are not login on this web site -->
      <li><a href="{{route('signup_form')}}" id="show-form"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{route('login_form')}}" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    @endguest
    @auth     
     <!-- after login you are login on this web site -->
      <li><a href="{{route('logout')}}" id="logout"><span class="glyphicon glyphicon-log-in"></span>Logout({{auth()->user()->email}})</a></li>
    @endauth
    </ul>
  </div>
</nav>