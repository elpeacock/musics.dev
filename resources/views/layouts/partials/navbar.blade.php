<!--navbars and things that do stuff-->

<div class='fixed-top'>

    <!--search nav-->
    <nav class='nav-top'>

    <div class='container'>

    <div class='row'>

        <form class="form-inline pull-right" role="search" method="GET" action="">
                
            <div class="input-group">

                <input type="text" class="form-control" placeholder="Search" name="search" value="">
                
                <div class="input-group-btn">
                    
                    <button class="btn btn-default navbar-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                
                </div>
            
            </div>

        </form>
                
    </div>

    </div>

    </nav>
    <!--/.nav-top search nav-->

    <!--nav for errything else-->
    <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

            <span class="sr-only">Toggle navigation</span>
            
            <span class="icon-bar"></span>
            
            <span class="icon-bar"></span>
            
            <span class="icon-bar"></span>
        
        </button>

        <a class="navbar-brand" href="#">ShowUp<span class="flashy">.buzz</span></a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav pull-right">
            
            <li class="dropdown">
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                
                <ul class="dropdown-menu">
                    
                    <li><a href="{{ action('UserController@show') }}">Account Info</a></li>
                    
                    <li><a href="{{ action('EventsController@create') }}">Create An Event</a></li>
                    
                    <li class="divider"></li>
                    
                    <li><a href="#">Log Out</a></li>                 
                </ul>
            
            <li><a href="{{ action('Auth\AuthController@getRegister') }}">Sign Up</a></li>
            
            <li><a href="{{ action('Auth\AuthController@getLogin') }}">Log In</a></li>

            <li><a href="{{ action('EventsController@index') }}">Events</a></li>
            
            </li>
       
        </ul>

    </div>

    </nav>

</div>
