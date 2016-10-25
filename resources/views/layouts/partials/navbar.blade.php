
<!-- Begin Navbar -->
<div id="nav">
  <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
          <a class="navbar-brand" href="#"><img class="img-responsive logo" src="https://cdn4.iconfinder.com/data/icons/adore/118/Camera.png" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{action('EventsController@index')}}">Events</a></li>

          <ul class="nav navbar-nav">
                <li><a href="#">Events</a></li>

                <li><a href="#">Profile</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
</div>
