<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}/">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::to('/') }}/">Home</a></li>
            <li><a href="{{ URL::to('/') }}/about">About</a></li>
            <li><a href="{{ URL::to('/') }}/contact">Contact</a></li>
          </ul>
		  @if(Session::has('admin_user')))
		  <ul class="nav navbar-nav pull-right">
            <li><a href="{{ env('TICKETING_URL') }}/ticket/soslogin?username={{ Session::get('admin_user')}}&appkey=1login">Ticketing <span class="glyphicon glyphicon-new-window"></span></a></li>
            <li><a href="{{ env('BRAND_URL') }}/brand/soslogin?username={{ Session::get('admin_user')}}&appkey=1login" target="_blank">Branding <span class="glyphicon glyphicon-new-window"></span></a></li>
			<li><a href="{{ URL::to('/') }}/logout">Logout</a></li>
          </ul>
		  @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>