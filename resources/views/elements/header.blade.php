<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/') }}" class="navbar-brand"><b>Quarter Management</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          
            <li><a href="">HOME</a></li>
<li><a href="">NEW APPLICATION</a></li>
<li><a href="">SEARCH DATA</a></li>
<li><a href="">QUARTER MAINTENANCE</a></li>
@if(!Auth::check())
<li><a href="{{ route('login') }}">POOL LOGIN</a></li>
@endif
          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>-->
        </div>
        @if(Auth::check())
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @if(Auth::user()->role_id == 1)
                <li><a href="{{ route('manager_list') }}">Dashboard</a></li>
                <li class="divider"></li>
                @endif
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        @endif
      </div>
    </nav>
  </header>