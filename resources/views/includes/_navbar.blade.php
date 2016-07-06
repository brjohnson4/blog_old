  <nav class="navbar navbar-transparent navbar-fixed-top navbar-padded app-navbar p-t-md">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed p-x-0"
              data-target="#stage" data-toggle="stage" data-distance="-250">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <strong class="home-button">
          latintutorial
        </strong>
      </a>
    </div>
    <div class="navbar-collapse collapse text-uppercase" style="font-weight:400">
      <ul class="nav navbar-nav navbar-right">
        <li>
	      <a href="{{ url('videos') }}">Videos</a>
        </li>
        <li>
          <a href="{{ url('topics') }}">Topics</a>
        </li>
        <li>
          <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DUUHVP6N29GM2">Support</a>
        </li>
        <li>
          <a href="{{ url('about') }}">About</a>
        </li>
        <li>
          <a href="{{ url('search') }}"><span class="icon icon-magnifying-glass"></span></a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
