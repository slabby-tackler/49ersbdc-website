<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-items" aria-expanded="false">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-items">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/lesson">Lessons</a></li>
                <li><a href="/officer">Officers</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::guest())
                    <li><a href="/logout">Logout {{Auth::user()->email}}</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>